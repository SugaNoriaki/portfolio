document.addEventListener("DOMContentLoaded", function () {
  const indexCheaker = document.querySelector(".index-cheaker");

  if (indexCheaker) {
    new MainForTopPage();
  } else {
    const deleteDiv = document.querySelector("#opening-msg");
    deleteDiv.remove();
    const gContainer = document.querySelector("#global-container");
    gContainer.classList.add("inview");

    new MainForContent();
  }
});

class MainForTopPage {
  constructor() {
    this.header = document.querySelector(".header");
    this.hero = new HeroSlider(".swiper-container");
    this._observers = [];
    this._init();
  }

  set setObserver(val) {
    this._observers.push(val);
  }

  get getObserver() {
    return this._observers;
  }

  _init() {
    new MobileMenu();
    new OpeningMsg();
    new DisplayTime();
    this._scrollInit();
  }

  _scrollInit() {
    this.setObserver = new ScrollObserver(
      ".header-trigger",
      this._navAnimation.bind(this),
      {
        once: false,
      }
    );

    this.setObserver = new ScrollObserver(".apper-up", this._slideAnimation, {
      rootMargin: "-100px 0px",
    });
    this.setObserver = new ScrollObserver(
      ".slide-in-left",
      this._slideAnimation,
      {
        rootMargin: "-150px 0px",
      }
    );

    this.setObserver = new ScrollObserver(
      ".swiper-container",
      this._heroSlideHandler.bind(this),
      {
        once: false,
      }
    );
  }

  _navAnimation(el, inview) {
    if (inview) {
      this.header.classList.remove("triggered");
    } else {
      this.header.classList.add("triggered");
    }
  }

  _slideAnimation(el, inview) {
    if (inview) {
      el.classList.add("inview");
    } else {
      el.classList.remove("inview");
    }
  }

  _heroSlideHandler(el, inview) {
    if (inview) {
      this.hero.start();
    } else {
      this.hero.stop();
    }
  }
}

class MainForContent {
  constructor() {
    this.header = document.querySelector(".header");
    this._observers = [];
    this._init();
  }

  set setObserver(val) {
    this._observers.push(val);
  }

  get getObserver() {
    return this._observers;
  }

  _init() {
    new MobileMenu();
    this._scrollInit();
  }

  _scrollInit() {
    this.setObserver = new ScrollObserver(
      ".header-trigger",
      this._navAnimation.bind(this),
      {
        once: false,
      }
    );

    this.setObserver = new ScrollObserver(".apper-up", this._slideAnimation, {
      rootMargin: "-100px 0px",
    });

    this.setObserver = new ScrollObserver(
      ".slide-in-right",
      this._slideAnimation,
      {
        rootMargin: "-150px 0px",
      }
    );
  }

  _navAnimation(el, inview) {
    if (inview) {
      this.header.classList.remove("triggered");
    } else {
      this.header.classList.add("triggered");
    }
  }

  _slideAnimation(el, inview) {
    if (inview) {
      el.classList.add("inview");
    } else {
      el.classList.remove("inview");
    }
  }
}
