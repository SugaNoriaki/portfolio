class DisplayTime {
  constructor() {
    this.DOM = {};
    this.DOM.body = document.querySelector("body");
    this.DOM.time = document.querySelector("#time");

    //show amPm
    this.ShowAmPm = this.hour >= 12 ? true : false;
    //12hr Format
    this.hours = this.hour % 12 || 12;

    this._init();
  }

  _init() {
    this.showTime();
  }

  //Add Zeros
  addZero(n) {
    return (parseInt(n, 10) < 10 ? "0" : "") + n;
  }

  getTime() {
    this.today = new Date();
    this.hour = this.today.getHours();
    this.min = this.today.getMinutes();
    this.sec = this.today.getSeconds();
  }

  showTime() {
    this.getTime();
    //Output time
    this.DOM.time.innerHTML = `${this.hour}<span>:</span>${this.addZero(
      this.min
    )}<span>:</span>${this.addZero(this.sec)} ${this.ShowAmPm ? "PM" : ""}`;

    setTimeout(this.showTime.bind(this), 1000);
  }
}
