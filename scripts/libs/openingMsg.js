class OpeningMsg {
  constructor() {
    this.firstMsg = document.querySelector(".animate-title");
    this.openingMsg = document.querySelector("#opening-msg");
    this.gContainer = document.querySelector("#global-container");
    this.defaultHTML = this.firstMsg.innerHTML;
    this.tw = new TweenTextAnimation(".animate-title");
    this.eventTypes = ["mousewheel", "touchmove"];
    this.scrollHandler = this._noneScroll.bind(this);

    this._init();
  }

  _init() {
    this.visited = sessionStorage.getItem("visiting");
    if (!this.visited) {
      this._runOpeningMsg();
    } else {
      this._removeOpeningDom();
    }
    this._pageRefreshEvent();
    this._browerHistory();
  }

  _browerHistory() {
    sessionStorage.setItem("visiting", "ture");
  }

  _runOpeningMsg() {
    this.openingMsg.style.visibility = "visible";
    this.eventTypes.forEach((eventType) => this._runNoneScroll(eventType));
    this.firstMsg.addEventListener(
      "animationend",
      function () {
        this.firstMsg.innerHTML = "";
        this.firstMsg.innerHTML = this.defaultHTML;
        this.firstMsg.classList.add("blur");
        this.firstMsg.addEventListener(
          "animationend",
          function () {
            this.firstMsg.innerHTML = "";
            this.openingMsg.classList.add("done");
            setTimeout(() => {
              this._removeOpeningDom();
              this.eventTypes.forEach((eventType) =>
                this._cancelNoneScroll(eventType)
              );
            }, 300);
          }.bind(this)
        );
      }.bind(this)
    );
  }

  _removeOpeningDom() {
    this.openingMsg.remove();
    this.gContainer.style.display = "block";
    this.gContainer.style.opacity = "1";
  }

  _noneScroll(event) {
    event.preventDefault();
  }

  _runNoneScroll(eventType) {
    window.addEventListener(eventType, this.scrollHandler, {
      passive: false,
    });
  }

  _cancelNoneScroll(eventType) {
    window.removeEventListener(eventType, this.scrollHandler, {
      passive: false,
    });
  }

  _pageRefreshEvent() {
    if (window.performance) {
      if (performance.navigation.type === 1) {
        this._removeOpeningDom();
        this.eventTypes.forEach((eventType) =>
          this._cancelNoneScroll(eventType)
        );
      }
    }
  }
}
