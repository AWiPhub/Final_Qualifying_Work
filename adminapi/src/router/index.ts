import { createRouter, createWebHistory, RouteRecordRaw } from "vue-router";

const routes: Array<RouteRecordRaw> = [
  {
    path: "/",
    name: "Home",
    component: () => import("../views/index.vue"),
  },
  {
    path: "/table/:pageId",
    name: "Table",
    props: true,
    component: () => import("../components/content/item.vue"),
    // children: [
    //   {
    //     path: "page/:pageId",
    //     name: "DictionaryItem",
    //     component: () => import("../views/item.vue")
    //   }
    // ]
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
