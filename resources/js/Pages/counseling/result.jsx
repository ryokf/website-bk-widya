import { Button } from 'flowbite-react'
import React from 'react'

const Result = () => {
    return (
        <div className='m-auto h-screen flex flex-col justify-center items-center w-11/12'>
            <h1 className="text-3xl mb-4 font-medium text-center">Hasil dari konseling akan kami tinjau</h1>
            <Button>
                <a href="/">
                    kembali
                </a>
            </Button>
        </div>
    )
}

export default Result
