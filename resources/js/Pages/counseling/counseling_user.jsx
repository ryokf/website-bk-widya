import React from 'react'

const CounselingUser = ({data}) => {
    console.log(data)
    return (
        <div className='m-8'>
            <h1 className="text-xl my-4 font-medium">daftar konseling {data.user.name}</h1>
            {
                data.counseling.map((item, index) => (
                    <div key={item.id}>
                        <a  href={"/counseling/detail/" + item.id + "/" + item.user_id} className=" text-blue-600 dark:text-blue-500 hover:underline">konseling ke-{++index}</a>
                    </div>
                ))
            }
        </div>
    )
}

export default CounselingUser
