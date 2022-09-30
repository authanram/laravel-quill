var s = Object.defineProperty;
var i = (l, e, t) => e in l ? s(l, e, { enumerable: !0, configurable: !0, writable: !0, value: t }) : l[e] = t;
var n = (l, e, t) => (i(l, typeof e != "symbol" ? e + "" : e, t), t);
class a {
  constructor(e) {
    n(this, "builderCallback", () => null);
    n(this, "instances", {});
    this.builderCallback = e;
  }
  setBuilderCallback(e) {
    return this.builderCallback = e, this;
  }
  create(e, t = {}) {
    return this.instances[e] = new this.builderCallback("#" + e, t), this.instances[e].editor.container.dispatchEvent(
      new CustomEvent("ready", {
        detail: { editor: () => this.instances[e] }
      })
    ), this.instances[e].editor;
  }
  resolve(e) {
    return this.instances[e] || null;
  }
}
window.laravelQuill = new a(
  (l, e) => new window.Quill(l, e)
);
