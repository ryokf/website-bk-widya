import { router } from '@inertiajs/react';
import { Button, Label, Select, TextInput } from 'flowbite-react';
import React, { useState } from 'react'

const Register = () => {
    const [name, setName] = useState("");
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");
    const [isMale, setIsMale] = useState();
    const [confirmPassword, setConfirmPassword] = useState("");

    const handleSubmit = (e) => {
        e.preventDefault()
        router.post('/register', {
            email, password, name, isMale, confirm_password: confirmPassword
        })
    }

    return (
        <div className="m-auto flex flex-col justify-center items-center h-screen">
            <h1 className="text-3xl mb-4 font-medium">Register</h1>
            <form className="flex w-10/12 flex-col gap-4">
                <div>
                    <div className="mb-2 block">
                        <Label htmlFor="name1" value="Your name" />
                    </div>
                    <TextInput value={name} onChange={(e) => setName(e.target.value)} id="name1" type="text" required />
                </div>
                <div>
                    <div className="mb-2 block">
                        <Label htmlFor="email1" value="Your email" />
                    </div>
                    <TextInput value={email} onChange={(e) => setEmail(e.target.value)} id="email1" type="email" placeholder="name@flowbite.com" required />
                </div>
                <div className="">
                <div className="mb-2 block">
                        <Label htmlFor="email1" value="Your gender" />
                    </div>
                    <Select onClick={(e) => setIsMale(e.target.value)}>
                        <option value={1} >Male</option>
                        <option value={0}>Female</option>
                    </Select>
                </div>
                <div>
                    <div className="mb-2 block">
                        <Label htmlFor="password1" value="Your password" />
                    </div>
                    <TextInput value={password} onChange={(e) => setPassword(e.target.value)} id="password1" type="password" required />
                </div>
                <div>
                    <div className="mb-2 block">
                        <Label htmlFor="confirmPassword1" value="Confirm password" />
                    </div>
                    <TextInput value={confirmPassword} onChange={(e) => setConfirmPassword(e.target.value)} id="confirmPassword1" type="password" required />
                </div>
                <Button onClick={handleSubmit}>Register</Button>
            </form>
        </div>
    );
}

export default Register
