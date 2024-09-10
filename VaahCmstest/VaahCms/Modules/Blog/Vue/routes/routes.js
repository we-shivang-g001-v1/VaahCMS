let routes= [];

import dashboard from "./vue-routes-dashboard";
import content from "./vue-routes-contents";

routes = routes.concat(dashboard);
routes = routes.concat(content);

export default routes;
