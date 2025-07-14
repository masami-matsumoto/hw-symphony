$(function () {

  function arrayShuffle(array) {
    for (var i = array.length - 1; i > 0; i--) {
      var r = Math.floor(Math.random() * (i + 1))
      var tmp = array[i]
      array[i] = array[r]
      array[r] = tmp
    }
    return array
  }

  var quiz = new Vue({
    el: '#quiz',
    data: {
      screen: 'loading',
      error: null,
      questions: [],
      questionIndex: 0,
      answers: [],
      results: [],
    },
    computed: {
      questionsCount: function () {
        return this.questions.length
      },
      currentQuestionNumber: function () {
        return this.questionIndex + 1
      },
      currentQuestion: function () {
        return this.questions[this.questionIndex]
      },
      currentQuestionIsCorrect: function () {
        return this.answers[this.questionIndex]
      },
      correctCount: function () {
        return this.answers.filter(function (answer) {
          return answer === true
        }).length
      },
      result: function () {
        return this.results.find(function (result) {
          return result.correct <= quiz.correctCount
        })
      },
    },
    created: function () {
      this.screen = 'loading'
      $.get('./js/quiz.json')
        .done(function (data) {
          data = Object.assign({
            questions: [],
            limit: 5,
            results: [],
          }, data)
          if (data.questions.length > 0 && data.results.length > 0) {
            // 設問をシャッフルして指定の件数だけ使う
            if (data.questions.length > data.limit && data.limit > 0) {
              quiz.questions = arrayShuffle(data.questions).slice(0, data.limit)
            } else {
              quiz.questions = arrayShuffle(data.questions)
            }
            // 各設問の選択肢をシャッフル、正解のインデックスも更新
            quiz.questions.map(function (question) {
              var answerText = question.choices[question.answer.index].text
              question.choices = arrayShuffle(question.choices)
              question.answer.index = question.choices.findIndex(function (choice) {
                return choice.text == answerText
              })
              return question
            })
            quiz.results = data.results
            // 結果は正解数で降順にソート
            quiz.results.sort(function (a, b) {
              return b.correct - a.correct
            })
            quiz.screen = 'question'
          } else {
            quiz.error = 'クイズデータが読み込めませんでした'
            quiz.screen = 'error'
          }
        })
        .fail(function () {
          quiz.error = 'クイズデータが読み込めませんでした'
          quiz.screen = 'error'
        })
    },
    methods: {
      index2MaruNumber: function(index) {
        // 1~20
        return String.fromCharCode('①'.charCodeAt() + index)
      },
      answer: function(index) {
        var correct = this.currentQuestion.answer.index == index
        this.answers.push(correct)
        this.screen = 'answer'
      },
      next: function() {
        if (this.questions[this.questionIndex + 1]) {
          this.questionIndex++;
          this.screen = 'question'
        } else {
          this.screen = 'result'
        }
      },
      restart: function() {
        this.questionIndex = 0;
        this.answers = []
        this.screen = 'question'
      }
    }
  })

})

if (!Object.assign) {
  Object.defineProperty(Object, 'assign', {
    enumerable: false,
    configurable: true,
    writable: true,
    value: function(target) {
      'use strict';
      if (target === undefined || target === null) {
        throw new TypeError('Cannot convert first argument to object');
      }

      var to = Object(target);
      for (var i = 1; i < arguments.length; i++) {
        var nextSource = arguments[i];
        if (nextSource === undefined || nextSource === null) {
          continue;
        }
        nextSource = Object(nextSource);

        var keysArray = Object.keys(Object(nextSource));
        for (var nextIndex = 0, len = keysArray.length; nextIndex < len; nextIndex++) {
          var nextKey = keysArray[nextIndex];
          var desc = Object.getOwnPropertyDescriptor(nextSource, nextKey);
          if (desc !== undefined && desc.enumerable) {
            to[nextKey] = nextSource[nextKey];
          }
        }
      }
      return to;
    }
  });
}

// https://tc39.github.io/ecma262/#sec-array.prototype.find
if (!Array.prototype.find) {
  Object.defineProperty(Array.prototype, 'find', {
    value: function(predicate) {
     // 1. Let O be ? ToObject(this value).
      if (this == null) {
        throw new TypeError('"this" is null or not defined');
      }

      var o = Object(this);

      // 2. Let len be ? ToLength(? Get(O, "length")).
      var len = o.length >>> 0;

      // 3. If IsCallable(predicate) is false, throw a TypeError exception.
      if (typeof predicate !== 'function') {
        throw new TypeError('predicate must be a function');
      }

      // 4. If thisArg was supplied, let T be thisArg; else let T be undefined.
      var thisArg = arguments[1];

      // 5. Let k be 0.
      var k = 0;

      // 6. Repeat, while k < len
      while (k < len) {
        // a. Let Pk be ! ToString(k).
        // b. Let kValue be ? Get(O, Pk).
        // c. Let testResult be ToBoolean(? Call(predicate, T, « kValue, k, O »)).
        // d. If testResult is true, return kValue.
        var kValue = o[k];
        if (predicate.call(thisArg, kValue, k, o)) {
          return kValue;
        }
        // e. Increase k by 1.
        k++;
      }

      // 7. Return undefined.
      return undefined;
    },
    configurable: true,
    writable: true
  });
}

if (!Array.prototype.findIndex) {
  Array.prototype.findIndex = function(predicate) {
    if (this === null) {
      throw new TypeError('Array.prototype.findIndex called on null or undefined');
    }
    if (typeof predicate !== 'function') {
      throw new TypeError('predicate must be a function');
    }
    var list = Object(this);
    var length = list.length >>> 0;
    var thisArg = arguments[1];
    var value;

    for (var i = 0; i < length; i++) {
      value = list[i];
      if (predicate.call(thisArg, value, i, list)) {
        return i;
      }
    }
    return -1;
  };
}
