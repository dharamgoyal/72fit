(function(module) {
try { app = angular.module("locator"); }
catch(err) { app = angular.module("locator", []); }
app.run(["$templateCache", function($templateCache) {
  "use strict";
  $templateCache.put("location-lookup/location-lookup.html",
    "<div class=\"search-box\">\n" +
    "  <location-predictions results=\"results\"></location-predictions>\n" +
    "</div>\n" +
    "\n" +
    "<ul>\n" +
    "\n" +
    "  <!-- Results -->\n" +
    "  <li ng-repeat=\"option in results | limitTo:limitTo\"\n" +
    "    ng-init=\"pickLocation(option);\"\n" +
    "    item=\"option\">{{option.description}}</li>\n" +
    "\n" +
    "</ul>");
}]);
})();
