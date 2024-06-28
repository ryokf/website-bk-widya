import { Button } from 'flowbite-react'
import React, { useEffect } from 'react'

const Home = ({user}) => {

    useEffect(() => {
        if(user != null){
            localStorage.setItem('user', JSON.stringify(user))
        } else {
            window.location.href = '/login'
        }
    }, [user])

    return (
        <div className='flex flex-col justify-center items-center w-full h-screen'>
            <h1 className="text-5xl mb-4 font-medium">Becare</h1>
            <p className='italic text-xl'>care about your mental health cause your happiness matters</p>
            <p className='italic text-xl mb-4'> pedulilah terhadap kesehatan mentalmu,karena kebahagiaanmu berharga</p>
            <Button className='my-2'>
                <a href="counseling/create">
                    cerita yuk
                </a>
            </Button>
            <Button color={'failure'} onClick={() =>localStorage.removeItem('user')}>
                <a href="/logout">
                    Logout
                </a>
            </Button>
        </div>
    )
}

export default Home
