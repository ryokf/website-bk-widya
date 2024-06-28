
"use client";

import React, { useState } from "react";
import { Button, Label, TextInput } from "flowbite-react";
import { router } from "@inertiajs/react";

export default function Login() {
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");

    const handleSubmit = (e) => {
        e.preventDefault()
        router.post('/login', { email, password })
    }

    return (
        <div className="m-auto flex flex-col justify-center items-center h-screen">
            <h1 className="text-3xl mb-4 font-medium">Login</h1>
            <form className="flex w-10/12 flex-col gap-4">
                <div>
                    <div className="mb-2 block">
                        <Label htmlFor="email1" value="Your email" />
                    </div>
                    <TextInput value={email} onChange={(e) => setEmail(e.target.value)} id="email1" type="email" placeholder="name@flowbite.com" required />
                </div>
                <div>
                    <div className="mb-2 block">
                        <Label htmlFor="password1" value="Your password" />
                    </div>
                    <TextInput value={password} onChange={(e) => setPassword(e.target.value)} id="password1" type="password" required />
                </div>
                <Button onClick={handleSubmit}>Login</Button>
                <p>Belum punya akun? <a href="/register">Register</a></p>
            </form>
        </div>
    );
}

