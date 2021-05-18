import React from 'react'
import Animal from './Animal/Animal'
import Title from '../../components/UI/Title/Title'


const Animals = (props) => {
    return(
        <>
            <Title> {props.title} </Title>
        </>
    )
}

export default Animals