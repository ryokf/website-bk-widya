import React from 'react'

const Detail = ({ data }) => {
    console.log(data)

    const date = new Date(data.counseling.created_at)
    const monthNames = [
        "Januari", "Februari", "Maret", "April", "Mei", "Juni",
        "Juli", "Agustus", "September", "Oktober", "November", "Desember"
    ];

    const day = date.getUTCDate();
    const month = monthNames[date.getMonth()]; // Bulan dimulai dari 0, jadi perlu ditambah 1
    const year = date.getUTCFullYear();

    return (
        <div>
            <div className="m-4">
                <p>nama : {data.user.name}</p>
                <p>jenis kelamin : {data.user.is_male ? 'Laki-laki' : 'Perempuan'}</p>
                <p>tanggal melakukan konseling : {`${day} ${month} ${year}`}</p>
            </div>
            {
                data.counselingDetail.map((item, index) => (
                    <div key={item.id} className='m-4 p-2 rounded-lg border '>
                        <h1>{++index}</h1>
                        <p className='my-2 font-medium'>{item.question.question}</p>
                        <p>jawab : {item.answer}</p>
                    </div>
                ))
            }
        </div>
    )
}

export default Detail
