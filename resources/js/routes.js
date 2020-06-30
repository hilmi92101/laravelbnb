import VueRouter from "vue-router";
import ExampleComponent from "./components/ExampleComponent";
import Example2 from "./components/Example2";


const routes = [


	{
		path: "/",
		component: ExampleComponent,
		name: "home",
	},
	{
		path: "/example-2",
		component: Example2,
		name: "example2",
	},

];


const router = new VueRouter({
	routes, // short for `routes: routes`
	mode: "history",
});

export default router;

