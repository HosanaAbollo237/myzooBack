import React from 'react'
import Image from '../Picture/Image/Image'

const Picture = (props) => {

    const style = {
        height: "100px",
        position: "absolute"
    }

    return(
            <picture>
                <Image src={props.src} style={style} alt={props.alt} />
            </picture>
    )
}
export default Picture
