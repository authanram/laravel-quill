(function(n){typeof define=="function"&&define.amd?define(n):n()})(function(){"use strict";var s=Object.defineProperty;var a=(n,t,e)=>t in n?s(n,t,{enumerable:!0,configurable:!0,writable:!0,value:e}):n[t]=e;var i=(n,t,e)=>(a(n,typeof t!="symbol"?t+"":t,e),e);class n{constructor(e){i(this,"builderCallback",()=>null);i(this,"instances",{});this.builderCallback=e}setBuilderCallback(e){return this.builderCallback=e,this}create(e,l={}){return this.instances[e]=new this.builderCallback("#"+e,l),this.instances[e].editor.container.dispatchEvent(new CustomEvent("ready",{detail:{editor:()=>this.instances[e]}})),this.instances[e].editor}resolve(e){return this.instances[e]||null}}window.laravelQuill=new n((t,e)=>new window.Quill(t,e))});
