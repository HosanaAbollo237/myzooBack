import React from 'react'
import { NavLink } from 'react-router-dom'
import Img from '../../../components/UI/Picture/Image/Image'
import fb from '../../../assets/images/fb.png'
import twitter from '../../../assets/images/twitter.png'
import youtube from '../../../assets/images/youtube.png'
import Classes from '../../../../public/css/footerCss.css'

const Footer = (props) => {

    return(
        <footer>
            <div className="logo logoFB">
                <Img src={fb} />
            </div>
            <div className="logo logoTW">
                <Img src={twitter} />
            </div>
            <div className="logo logoYT">
                <Img src={youtube} />
            </div>

            <NavLink to="mentions-legales">Mentions legales</NavLink>
        </footer>
    )
}

export default Footer