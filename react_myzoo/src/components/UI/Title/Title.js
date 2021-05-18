import React from 'react'
import titleCss from '../../../../public/css/titleCss.css'

const Title = (props) => {

    return(
        <h1 className={props.bgColor ? "simpleTitle" : "errorTitle"} >{props.children}</h1>
    )
}
export default Title