import React from 'react'
import Classes from '../../../../../public/css/imgCss.css'

const Image = (props) => {
    return(
        <img src={props.src}  
            width={props.width} 
            height={props.height} 
            style={Classes.img} 
            alt={props.alt}/>
    )
}

export default Image