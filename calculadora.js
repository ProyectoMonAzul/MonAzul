let result = document.getElementById('result');

function appendNumber(number) {
  result.value += number;
}

function appendOperator(operator) {
  result.value += operator;
}

function calculate() {
  try {
    result.value = eval(result.value);
  } catch (error) {
    result.value = 'Error';
  }
}

function clearResult() {
  result.value = '';
}

function deleteLast() {
  result.value = result.value.slice(0, -1);
}
