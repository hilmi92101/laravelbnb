import VueRouter from "vue-router";
import ExampleComponent from "./components/ExampleComponent";
import Example2 from "./components/Example2";
import Bookables from "./bookables/Bookables";
import BookableListItem from "./bookables/BookableListItem";


const routes = [


	{
		path: "/",
		component: Bookables,
		name: "home",
	},
	{
		path: "/example-2",
		component: BookableListItem,
		name: "example2",
	},

];


const router = new VueRouter({
	routes, // short for `routes: routes`
	mode: "history",
});

export default router;

