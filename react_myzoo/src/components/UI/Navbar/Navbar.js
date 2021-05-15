import React from 'react'
import logo from '../../../assets/images/logo.png'
const Navbar = () => {

    return(
        <>
            <nav>
                <ul className="navbar-nav me-auto">
                    <li className="nav-item">
                        <a class="navbar-brand" href="#"> <img src={logo} width="65" height="65" alt="" /></a>
                    </li>
                    <li className="nav-item">
                        <a href="#Accueil" className="navLink">Accueil</a>
                    </li>
                </ul>
            </nav>
        </>
    )
}

export default Navbar;