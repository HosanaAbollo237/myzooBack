import React from 'react'
import Continent from './Continent/Continent'
import Title from '../../components/UI/Title/Title'

const Continents = (props) => {

    return(
        <>
            <Title> {props.title} </Title>
            <p>Contenu de la page COntinents</p><br/>
        </>
    )
}

export default Continents