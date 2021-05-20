import React from 'react'
import { useParams } from 'react-router-dom'

const Animal = (props) => {
    
    let { id } = useParams();
    
    return(
        <div>Page d'un Animal, id: {id} </div>
    )
}

export default Animal