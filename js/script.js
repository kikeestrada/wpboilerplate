;
console.log('Hello WordPress')
import {module1} from './components/module1'
import {module2} from './components/module2'
(()=>{
  // To avoid conflicts with jQuery versions between WordPress and its plugins
  $ = jQuery.noConflict() 
	module1();
  module2();
})(); 
