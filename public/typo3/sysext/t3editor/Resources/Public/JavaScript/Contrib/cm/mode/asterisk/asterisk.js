!function(e){"object"==typeof exports&&"object"==typeof module?e(require("../../lib/codemirror")):"function"==typeof define&&define.amd?define(["../../lib/codemirror"],e):e(CodeMirror)}(function(e){"use strict";e.defineMode("asterisk",function(){var e=["exten","same","include","ignorepat","switch"],t=["#include","#exec"],i=["addqueuemember","adsiprog","aelsub","agentlogin","agentmonitoroutgoing","agi","alarmreceiver","amd","answer","authenticate","background","backgrounddetect","bridge","busy","callcompletioncancel","callcompletionrequest","celgenuserevent","changemonitor","chanisavail","channelredirect","chanspy","clearhash","confbridge","congestion","continuewhile","controlplayback","dahdiacceptr2call","dahdibarge","dahdiras","dahdiscan","dahdisendcallreroutingfacility","dahdisendkeypadfacility","datetime","dbdel","dbdeltree","deadagi","dial","dictate","directory","disa","dumpchan","eagi","echo","endwhile","exec","execif","execiftime","exitwhile","extenspy","externalivr","festival","flash","followme","forkcdr","getcpeid","gosub","gosubif","goto","gotoif","gotoiftime","hangup","iax2provision","ices","importvar","incomplete","ivrdemo","jabberjoin","jabberleave","jabbersend","jabbersendgroup","jabberstatus","jack","log","macro","macroexclusive","macroexit","macroif","mailboxexists","meetme","meetmeadmin","meetmechanneladmin","meetmecount","milliwatt","minivmaccmess","minivmdelete","minivmgreet","minivmmwi","minivmnotify","minivmrecord","mixmonitor","monitor","morsecode","mp3player","mset","musiconhold","nbscat","nocdr","noop","odbc","odbc","odbcfinish","originate","ospauth","ospfinish","osplookup","ospnext","page","park","parkandannounce","parkedcall","pausemonitor","pausequeuemember","pickup","pickupchan","playback","playtones","privacymanager","proceeding","progress","queue","queuelog","raiseexception","read","readexten","readfile","receivefax","receivefax","receivefax","record","removequeuemember","resetcdr","retrydial","return","ringing","sayalpha","saycountedadj","saycountednoun","saycountpl","saydigits","saynumber","sayphonetic","sayunixtime","senddtmf","sendfax","sendfax","sendfax","sendimage","sendtext","sendurl","set","setamaflags","setcallerpres","setmusiconhold","sipaddheader","sipdtmfmode","sipremoveheader","skel","slastation","slatrunk","sms","softhangup","speechactivategrammar","speechbackground","speechcreate","speechdeactivategrammar","speechdestroy","speechloadgrammar","speechprocessingsound","speechstart","speechunloadgrammar","stackpop","startmusiconhold","stopmixmonitor","stopmonitor","stopmusiconhold","stopplaytones","system","testclient","testserver","transfer","tryexec","trysystem","unpausemonitor","unpausequeuemember","userevent","verbose","vmauthenticate","vmsayname","voicemail","voicemailmain","wait","waitexten","waitfornoise","waitforring","waitforsilence","waitmusiconhold","waituntil","while","zapateller"];return{startState:function(){return{extenStart:!1,extenSame:!1,extenInclude:!1,extenExten:!1,extenPriority:!1,extenApplication:!1}},token:function(n,a){var r="";return n.eatSpace()?null:a.extenStart?(n.eatWhile(/[^\s]/),r=n.current(),/^=>?$/.test(r)?(a.extenExten=!0,a.extenStart=!1,"strong"):(a.extenStart=!1,n.skipToEnd(),"error")):a.extenExten?(a.extenExten=!1,a.extenPriority=!0,n.eatWhile(/[^,]/),a.extenInclude&&(n.skipToEnd(),a.extenPriority=!1,a.extenInclude=!1),a.extenSame&&(a.extenPriority=!1,a.extenSame=!1,a.extenApplication=!0),"tag"):a.extenPriority?(a.extenPriority=!1,a.extenApplication=!0,n.next(),a.extenSame?null:(n.eatWhile(/[^,]/),"number")):a.extenApplication?(n.eatWhile(/,/),","===(r=n.current())?null:(n.eatWhile(/\w/),r=n.current().toLowerCase(),a.extenApplication=!1,-1!==i.indexOf(r)?"def strong":null)):function(i,n){var a="",r=i.next();if(";"==r)return i.skipToEnd(),"comment";if("["==r)return i.skipTo("]"),i.eat("]"),"header";if('"'==r)return i.skipTo('"'),"string";if("'"==r)return i.skipTo("'"),"string-2";if("#"==r&&(i.eatWhile(/\w/),a=i.current(),-1!==t.indexOf(a)))return i.skipToEnd(),"strong";if("$"==r&&"{"==i.peek())return i.skipTo("}"),i.eat("}"),"variable-3";if(i.eatWhile(/\w/),a=i.current(),-1!==e.indexOf(a)){switch(n.extenStart=!0,a){case"same":n.extenSame=!0;break;case"include":case"switch":case"ignorepat":n.extenInclude=!0}return"atom"}}(n,a)}}}),e.defineMIME("text/x-asterisk","asterisk")});