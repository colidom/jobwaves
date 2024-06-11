import { createBrowserRouter } from "react-router-dom";
import AuthLayout from "./app-front/src/layouts/AuthLayout";
import Layout from "./app-front/src/layouts/Layout";
import Home from "./app-front/src/views/Home";
import Login from "./app-front/src/views/Login";
import Register from "./app-front/src/views/Register";

const router = createBrowserRouter([
    {
        path: "/",
        element: <Layout />,
        children: [
            {
                index: true,
                element: <Home />,
            },
        ],
    },
    {
        path: "/auth",
        element: <AuthLayout />,
        children: [
            {
                path: "/auth/login",
                element: <Login />,
            },
            {
                path: "/auth/register",
                element: <Register />,
            },
        ],
    },
]);

export default router;
