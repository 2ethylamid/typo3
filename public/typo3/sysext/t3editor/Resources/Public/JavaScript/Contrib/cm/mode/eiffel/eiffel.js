!function(e){"object"==typeof exports&&"object"==typeof module?e(require("../../lib/codemirror")):"function"==typeof define&&define.amd?define(["../../lib/codemirror"],e):e(CodeMirror)}(function(e){"use strict";e.defineMode("eiffel",function(){function e(e){for(var t={},r=0,n=e.length;r<n;++r)t[e[r]]=!0;return t}var t=e(["note","across","when","variant","until","unique","undefine","then","strip","select","retry","rescue","require","rename","reference","redefine","prefix","once","old","obsolete","loop","local","like","is","inspect","infix","include","if","frozen","from","external","export","ensure","end","elseif","else","do","creation","create","check","alias","agent","separate","invariant","inherit","indexing","feature","expanded","deferred","class","Void","True","Result","Precursor","False","Current","create","attached","detachable","as","and","implies","not","or"]),r=e([":=","and then","and","or","<<",">>"]);function n(e,t){if(e.eatSpace())return null;var r,n,i,o,a,u,f=e.next();return'"'==f||"'"==f?(o=f,a="string",r=function(e,t){for(var r,n=!1;null!=(r=e.next());){if(r==o&&(u||!n)){t.tokenize.pop();break}n=!n&&"%"==r}return a},n=e,(i=t).tokenize.push(r),r(n,i)):"-"==f&&e.eat("-")?(e.skipToEnd(),"comment"):":"==f&&e.eat("=")?"operator":/[0-9]/.test(f)?(e.eatWhile(/[xXbBCc0-9\.]/),e.eat(/[\?\!]/),"ident"):/[a-zA-Z_0-9]/.test(f)?(e.eatWhile(/[a-zA-Z_0-9]/),e.eat(/[\?\!]/),"ident"):/[=+\-\/*^%<>~]/.test(f)?(e.eatWhile(/[=+\-\/*^%<>~]/),"operator"):null}return{startState:function(){return{tokenize:[n]}},token:function(e,n){var i=n.tokenize[n.tokenize.length-1](e,n);if("ident"==i){var o=e.current();i=t.propertyIsEnumerable(e.current())?"keyword":r.propertyIsEnumerable(e.current())?"operator":/^[A-Z][A-Z_0-9]*$/g.test(o)?"tag":/^0[bB][0-1]+$/g.test(o)?"number":/^0[cC][0-7]+$/g.test(o)?"number":/^0[xX][a-fA-F0-9]+$/g.test(o)?"number":/^([0-9]+\.[0-9]*)|([0-9]*\.[0-9]+)$/g.test(o)?"number":/^[0-9]+$/g.test(o)?"number":"variable"}return i},lineComment:"--"}}),e.defineMIME("text/x-eiffel","eiffel")});