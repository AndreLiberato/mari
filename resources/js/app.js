import './bootstrap';
import { Input, Collapse, Dropdown, Sidenav, Ripple, initTE } from "tw-elements";
initTE({ Input, Collapse, Dropdown, Sidenav, Ripple });
  
const instanceMode = Sidenav.getInstance(
  document.getElementById("sidenav-2")
);
const modes = ["push", "over", "side"];

modes.forEach((mode) => {
  const modeSwitch = document.getElementById(mode);
  modeSwitch.addEventListener("click", () => {
    const instance = Sidenav.getInstance(
      document.getElementById("sidenav-2")
    );
    instance.changeMode(mode);
    modes.forEach((el) => {
      if (el === mode) {
        ["text-blue-600", "border-blue-600"].forEach((item) =>
          modeSwitch.classList.remove(item)
        );
        modeSwitch.className +=
          " bg-blue-600 text-white hover:bg-blue-700 active:bg-blue-800 focus:bg-blue-700 border-transparent";
      } else {
        const node = document.getElementById(el);
        node.className += " text-blue-600 border-blue-600";
        [
          "bg-blue-600",
          "text-white",
          "hover:bg-blue-700",
          "active:bg-blue-800",
          "focus:bg-blue-700",
          "border-transparent",
        ].forEach((item) => node.classList.remove(item));
      }
    });
  });
});