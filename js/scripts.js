;
console.log('Hello WordPress')
//To avoid jQuery version conflicts between WordPress and plugins
$ = jQuery.noConflict()

import {module1} from './modules/module1'
(()=>{
	module1();
})();