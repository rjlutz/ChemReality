var isCompatible=function(){if(navigator.appVersion.indexOf('MSIE')!==-1&&parseFloat(navigator.appVersion.split('MSIE')[1])<6){return false;}return true;};var startUp=function(){mediaWiki.loader.register([["site","1396046566",[],"site"],["startup","20140331030102",[],"startup"],["user","1396046566",[],"user"],["user.options","1396046566",[],"private"],["skins.vector","1396046566",[]],["skins.monobook","1396046566",[]],["skins.simple","1396046566",[]],["skins.chick","1396046566",[]],["skins.modern","1396046566",[]],["skins.cologneblue","1396046566",[]],["skins.nostalgia","1396046566",[]],["skins.standard","1396046566",[]],["jquery","1396046566",[]],["jquery.async","1396046566",[]],["jquery.autoEllipsis","1396046566",["jquery.highlightText"]],["jquery.checkboxShiftClick","1396046566",[]],["jquery.client","1396046566",[]],["jquery.collapsibleTabs","1396046566",[]],["jquery.color","1396046566",[]],["jquery.cookie","1396046566",[]],["jquery.delayedBind","1396046566",[]],[
"jquery.expandableField","1396046566",[]],["jquery.highlightText","1396046566",[]],["jquery.placeholder","1396046566",[]],["jquery.localize","1396046566",[]],["jquery.suggestions","1396046566",["jquery.autoEllipsis"]],["jquery.tabIndex","1396046566",[]],["jquery.textSelection","1396046566",[]],["jquery.tipsy","1396046566",[]],["jquery.ui.core","1396046566",["jquery"]],["jquery.ui.widget","1396046566",[]],["jquery.ui.mouse","1396046566",["jquery.ui.widget"]],["jquery.ui.position","1396046566",[]],["jquery.ui.draggable","1396046566",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"]],["jquery.ui.droppable","1396046566",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget","jquery.ui.draggable"]],["jquery.ui.resizable","1396046566",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"]],["jquery.ui.selectable","1396046566",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"]],["jquery.ui.sortable","1396046566",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"]],[
"jquery.ui.accordion","1396046566",["jquery.ui.core","jquery.ui.widget"]],["jquery.ui.autocomplete","1396046566",["jquery.ui.core","jquery.ui.widget","jquery.ui.position"]],["jquery.ui.button","1396046566",["jquery.ui.core","jquery.ui.widget"]],["jquery.ui.datepicker","1396046566",["jquery.ui.core"]],["jquery.ui.dialog","1396046566",["jquery.ui.core","jquery.ui.widget","jquery.ui.button","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.position","jquery.ui.resizable"]],["jquery.ui.progressbar","1396046566",["jquery.ui.core","jquery.ui.widget"]],["jquery.ui.slider","1396046566",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"]],["jquery.ui.tabs","1396046566",["jquery.ui.core","jquery.ui.widget"]],["jquery.effects.core","1396046566",["jquery"]],["jquery.effects.blind","1396046566",["jquery.effects.core"]],["jquery.effects.bounce","1396046566",["jquery.effects.core"]],["jquery.effects.clip","1396046566",["jquery.effects.core"]],["jquery.effects.drop","1396046566",[
"jquery.effects.core"]],["jquery.effects.explode","1396046566",["jquery.effects.core"]],["jquery.effects.fold","1396046566",["jquery.effects.core"]],["jquery.effects.highlight","1396046566",["jquery.effects.core"]],["jquery.effects.pulsate","1396046566",["jquery.effects.core"]],["jquery.effects.scale","1396046566",["jquery.effects.core"]],["jquery.effects.shake","1396046566",["jquery.effects.core"]],["jquery.effects.slide","1396046566",["jquery.effects.core"]],["jquery.effects.transfer","1396046566",["jquery.effects.core"]],["mediawiki","1396046566",[]],["mediawiki.util","1396046566",["jquery.checkboxShiftClick","jquery.client","jquery.placeholder"]],["mediawiki.action.history","1396046566",["mediawiki.legacy.history"]],["mediawiki.action.edit","1396046566",[]],["mediawiki.action.view.rightClickEdit","1396046566",[]],["mediawiki.special.preferences","20140331030102",[]],["mediawiki.special.search","1396046566",[]],["mediawiki.language","1396046566",[]],["mediawiki.legacy.ajax",
"20140328224253",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.ajaxwatch","1396046566",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.block","1396046566",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.commonPrint","1396046566",[]],["mediawiki.legacy.config","1396046566",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.diff","1396046566",["mediawiki.legacy.wikibits"],"mediawiki.action.history"],["mediawiki.legacy.edit","1396046566",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.enhancedchanges","1396046566",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.history","1396046566",["mediawiki.legacy.wikibits"],"mediawiki.action.history"],["mediawiki.legacy.htmlform","1396046566",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.IEFixes","1396046566",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.metadata","20140329050521",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.mwsuggest","1396046566",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.prefs","1396046566",[
"mediawiki.legacy.wikibits","mediawiki.legacy.htmlform"]],["mediawiki.legacy.preview","1396046566",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.protect","1396046566",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.search","1396046566",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.shared","1396046566",[]],["mediawiki.legacy.oldshared","1396046566",[]],["mediawiki.legacy.upload","1396046566",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.wikibits","20140328224253",["mediawiki.language"]],["mediawiki.legacy.wikiprintable","1396046566",[]]]);mediaWiki.config.set({"wgLoadScript":"/load.php","debug":false,"skin":"monobook","stylepath":"/skins","wgUrlProtocols":"http\\:\\/\\/|https\\:\\/\\/|ftp\\:\\/\\/|irc\\:\\/\\/|gopher\\:\\/\\/|telnet\\:\\/\\/|nntp\\:\\/\\/|worldwind\\:\\/\\/|mailto\\:|news\\:|svn\\:\\/\\/|git\\:\\/\\/|mms\\:\\/\\/","wgArticlePath":"/wiki/$1","wgScriptPath":"","wgScriptExtension":".php","wgScript":"/index.php","wgVariantArticlePath":false,"wgActionPaths":[],
"wgServer":"http://wiki.ggc.edu","wgUserLanguage":"en","wgContentLanguage":"en","wgVersion":"1.17.0","wgEnableAPI":true,"wgEnableWriteAPI":true,"wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgMainPageTitle":"Main Page","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"GGCWiki","5":"GGCWiki talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk","14":"Category","15":"Category talk"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"ggcwiki":4,"ggcwiki_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"image":6,"image_talk":7},"wgSiteName":"GGCWiki","wgFileExtensions":["ppt","pdf","rar","tar","bz2","gz","doc","xls","rtf","txt","st","ogg","mp3","mp4","wav","wmv","mov","avi","svg","mpg","mpeg","rm","ram"
,"divx","dv","xml","jpg","jpeg","tif","tiff","psd","ai","eps","ps","ttf","gz","rar","sit","sitx","c","cpp","cs","gif","png","bmp","mdb","m4v","xcf","zip","flc","pct","qtl","3gp","au","aiff","pptx","docx"],"wgDBname":"ggcwikidb","wgExtensionAssetsPath":"/extensions","wgResourceLoaderMaxQueryLength":-1});};if(isCompatible()){document.write("\x3cscript src=\"/load.php?debug=false\x26amp;lang=en\x26amp;modules=jquery%7Cmediawiki\x26amp;only=scripts\x26amp;skin=monobook\x26amp;version=20110608T121000Z\"\x3e\x3c/script\x3e");}delete isCompatible;;