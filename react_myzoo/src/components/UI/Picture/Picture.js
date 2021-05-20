import React from 'react'
import Image from '../Picture/Image/Image'

const Picture = (props) => {

    return(
            <picture>
                <Image src={props.src} alt={props.alt} />
            </picture>
    )
}
export default Picture
