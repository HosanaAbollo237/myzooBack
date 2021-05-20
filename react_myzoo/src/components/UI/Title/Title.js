import React from 'react'
import titleCss from '../../../../public/css/titleCss.css'

const Title = (props) => {

    return(
        <h1 className={props.bgColor ? props.bgColor : "normal"} >{props.children}</h1>
    )
}
export default Title