document.addEventListener("DOMContentLoaded", () => {
  const allBtn = document.getElementsByTagName("button");
  const num = document.getElementById("num");
  for (let i = 0; i < allBtn.length - 2; i++) {
    allBtn[i].addEventListener("click", () => {
      num.innerText = num.innerText + allBtn[i].innerText;
      console.log(num.innerText);
    });
  }
  allBtn[allBtn.length - 2].addEventListener("click", () => {
    num.innerText = eval(num.innerText);
  });
  allBtn[allBtn.length - 1].addEventListener("click", () => {
    num.innerText = "";
  });
});
