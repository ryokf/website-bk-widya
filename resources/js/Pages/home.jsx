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
            <Button>
                <a href="counseling/create">
                    Mulai konseling
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
