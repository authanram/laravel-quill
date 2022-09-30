var s = Object.defineProperty;
var a = (t, e, n) => e in t ? s(t, e, { enumerable: !0, configurable: !0, writable: !0, value: n }) : t[e] = n;
var l = (t, e, n) => (a(t, typeof e != "symbol" ? e + "" : e, n), n);
class i {
  constructor(e) {
    l(this, "builderCallback", () => null);
    l(this, "instances", {});
    this.builderCallback = e;
  }
  setBuilderCallback(e) {
    return this.builderCallback = e, this;
  }
  create(e, n = {}) {
    return this.instances[e] = this.builderCallback(e, n), document.addEventListener("DOMContentLoaded", () => {
      this.instances[e].editor.container.dispatchEvent(
        new CustomEvent("ready", {
          detail: { editor: () => this.instances[e] }
        })
      );
    }), this.instances[e];
  }
  resolve(e) {
    return this.instances[e] || null;
  }
}
window.laravelQuill = new i(
  (t, e) => new window.Quill("#" + t, e)
);
