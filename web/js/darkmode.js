document.addEventListener("DOMContentLoaded", event => {
  renderViewMode();
});

function renderViewMode() {
  var darkMode = localStorage.getItem("dark_mode");
  if (darkMode == "false" || darkMode == null) {
    document.getElementById("darkmode").innerHTML = "Dark mode on";

    document.documentElement.style.setProperty("--color-1", "#5c6d70");
    document.documentElement.style.setProperty("--color-2", "#ebe9e9");
    document.documentElement.style.setProperty("--color-3", "#484a47");
    document.documentElement.style.setProperty("--color-5", "#fcb07e");
    document.documentElement.style.setProperty("--color-7", "#fcb585");
    document.documentElement.style.setProperty("--color-8", "#ff686b");
  } else if (
    darkMode == "true" ||
    (darkMode != "false" && darkMode != "true")
  ) {
    document.getElementById("darkmode").innerHTML = "Dark mode off";

    document.documentElement.style.setProperty("--color-1", "#ebe9e9");
    document.documentElement.style.setProperty("--color-2", "#484a47");
    document.documentElement.style.setProperty("--color-3", "#ebe9e9");
    document.documentElement.style.setProperty("--color-5", "#5c6d70");
    document.documentElement.style.setProperty("--color-7", "#4F6D7A");
    document.documentElement.style.setProperty("--color-8", "#3A5683");
  }
}

function toggleDarkMode() {
  var darkMode = localStorage.getItem("dark_mode");

  if (!darkMode) {
    localStorage.setItem("dark_mode", "true");
  } else {
    if (darkMode == "false") {
      localStorage.setItem("dark_mode", "true");
    } else if (darkMode == "true") {
      localStorage.setItem("dark_mode", "false");
    }
  }
  renderViewMode();
}