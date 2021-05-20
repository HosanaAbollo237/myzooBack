import React from 'react'
import Classes from '../../../../../public/css/imgCss.css'

const Image = (props) => {

    const type = props.type;

    if(type === "banner"){
        return(
            <img src={props.src}  
            width="100%" 
            height="300px" 
            alt="BANNER"/>
        )
    } else {
        return(
            <img src={props.src ? props.src : ""}  
            width={props.width ? props.width : ""} 
            height={props.height ? props.height : ""} 
            alt={props.alt}/>
        )
    }
}

export default Image