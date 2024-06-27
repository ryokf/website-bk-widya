import { Button, Label, Textarea } from 'flowbite-react'
import React, { useState } from 'react'
import { router } from '@inertiajs/react'

const Create = ({ data }) => {
    const [currentQuestion, setCurrentQuestion] = useState(0)
    const [answers, setAnswers] = useState([])
    const [currentAnswers, setCurrentAnswers] = useState("")


    function nextHandle(e) {
        setCurrentQuestion(currentQuestion + 1)
    }

    function handleSubmit(e) {
        e.preventDefault()
        router.post('/counseling/create', answers)
    }

    return (
        <div className='m-auto h-screen flex flex-col justify-center items-center w-11/12'>
            {
                data.question[currentQuestion].question
            }
            <div className="w-full">
                <div className="mb-2 block">
                    <Label htmlFor="comment" value="Your message" />
                </div>
                <Textarea onChange={(e) => setAnswers({ ...answers, [currentQuestion]: e.target.value })} id="comment" placeholder="Leave a comment..." required rows={4} />
            </div>
            <Button className='my-2' onClick={(e) => currentQuestion < data.question.length - 1 ? nextHandle() : handleSubmit(e)}>
                {
                    currentQuestion < data.question.length - 1 ? 'Next' : 'Submit'
                }
            </Button>
        </div>
    )
}

export default Create
