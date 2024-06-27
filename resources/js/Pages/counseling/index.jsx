
"use client";
import React from "react";
import { Button, Table } from "flowbite-react";

export default function Index({ data }) {
    console.log(data)
    return (
        <div className="w-11/12 m-auto my-8">
            <Button color={'failure'} onClick={() => localStorage.removeItem('user')}>
                <a href="/logout">
                    Logout
                </a>
            </Button>
            <h1 className="text-3xl my-4 font-medium">daftar Konseling</h1>
            <div className="overflow-x-auto">
                <Table hoverable>
                    <Table.Head>
                        <Table.HeadCell>#</Table.HeadCell>
                        <Table.HeadCell>Nama</Table.HeadCell>
                        <Table.HeadCell></Table.HeadCell>
                    </Table.Head>
                    <Table.Body className="divide-y">
                        {
                            data.map((item, index) => (
                                <Table.Row className="bg-white dark:border-gray-700 dark:bg-gray-800" key={item.id}>
                                    <Table.Cell className="whitespace-nowrap font-medium text-gray-900 dark:text-white">
                                        {index + 1}
                                    </Table.Cell>
                                    <Table.Cell>
                                        {item.name}
                                    </Table.Cell>
                                    <Table.Cell>
                                        <a href={"counseling-user/" + item.id} className="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                                    </Table.Cell>
                                </Table.Row>
                            ))
                        }
                    </Table.Body>
                </Table>
            </div>
        </div>
    );
}
