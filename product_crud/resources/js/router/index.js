import { createRouter, createWebHistory } from "vue-router";
import productIndex from "../Components/products/index.vue";
import notFound from "../Components/notFound.vue";
import productNew from "../Components/products/new.vue";

const routes = [
    {
        path: "/",
        name: "product home",
        component: productIndex,
    },
    {
        path: "/product/new",
        name: "product new",
        component: productNew,
    },
    {
        path: "/:pathMatch(.*)*",
        component: notFound,
    },
];

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes,
});

export default router;
