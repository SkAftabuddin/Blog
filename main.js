const btn = document.querySelector(".btn");

btn.addEventListener("mousemove", (e) => {
  const xPos = e.pageX - e.target.offsetLeft;
  const yPos = e.pageY - e.target.offsetTop;

  e.target.style.setProperty("--x", `${xPos}px`);
  e.target.style.setProperty("--y", `${yPos}px`);
});