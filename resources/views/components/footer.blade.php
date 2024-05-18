<div class="container-fluid footer">
    <div class="text-m text-gray-800 dark:text-gray-400 row mt-1">
        <div class="text-center align-self-center text-md-end col-12 col-sm-3">
            <p>Kandog © 2024</p>
        </div>



        <div class="flex-column flex-sm-row mb-2 d-flex col-12 col-sm-9 mx-0 justify-content-center align-middle">
            <button type="button" class="boton-foot" data-bs-toggle="modal" data-bs-target="#modalAvisoLegal">
                {{ __('Legal warning') }}
            </button>
            <!-- Modal aviso legal-->
            <div class="modal fade" id="modalAvisoLegal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-center">
                            <h5 class="modal-title fw-bold fs-3" id="exampleModalLabel">{{ __('Legal warning') }}</h5>
                        </div>
                        <div class="modal-body text-start p-5 pb-2">
                            @if (config('app.locale') == 'en')
                                <h2 class="fw-bold">I. Identification Information</h2>
                                <p>
                                    In compliance with the information duty provided in Article 10 of Law 34/2002, of July
                                    11, on Services of the Information Society and Electronic Commerce, we offer the
                                    following identification information of the company responsible for this website:
                                </p>
                                <ul>
                                    <li>Company name: Gabriela Barton Cantín</li>
                                    <li>Trade name: Kandog</li>
                                    <li>NIF: 2536XXXXX</li>
                                    <li>Address: Avenida XXXXXX XXXXXXXX XX</li>
                                    <li>E-mail: edukandog@kandog.es</li>
                                    <li>Commercial registry of Zaragoza, Volume XX, Folio XXX, Page XXX, Registration
                                        XXXXXXXXXXX.</li>
                                </ul><br>
    
                                <h2 class="fw-bold">II. Purpose</h2>
                                <p>
                                    Kandog's platform aims to provide computer and organizational resources to canine
                                    trainers and educators to facilitate their professional performance by providing
                                    information and tools for managing appointments, sessions, and other aspects related to
                                    the care and education of dogs.
                                </p>
    
                                <h2 class="fw-bold">III. Privacy and Data Processing</h2>
                                <p>
                                    To access some services of Kandog, users may be asked for personal information. Kandog
                                    guarantees the confidentiality and protection of this data in accordance with the
                                    General Data Protection Regulation (GDPR). Users can exercise their rights to access,
                                    rectification, cancellation, and opposition by sending an email to info@kandog.es or
                                    writing to Avenida XXXXXXX, 50015, Zaragoza.
                                </p>
    
                                <h2 class="fw-bold">IV. Cookies</h2>
                                <p>
                                    Kandog uses cookies to improve the user experience and for analytical purposes. Users
                                    can accept or reject the use of cookies at any time through their browser settings. For
                                    more information on the use of cookies, please refer to our cookie policy.
                                </p>
    
                                <h2 class="fw-bold">V. Intellectual Property</h2>
                                <p>
                                    All content, including texts, images, sounds, software, and other elements of the
                                    website, are the exclusive property of Kandog or its licensors. The use, reproduction,
                                    distribution, transmission, or public communication of this content without the express
                                    consent of Kandog is prohibited.
                                </p>
    
                                <h2 class="fw-bold">VI. Use of the Website</h2>
                                <p>
                                    The user commits to making proper use of the content of this website and not to use it
                                    for illicit, illegal, or activities contrary to good faith and public order. The
                                    following are prohibited:
                                </p>
                                <ol>
                                    <li>Spreading content of a racist, xenophobic, illegal-pornographic nature, promoting
                                        terrorism, or violating human rights.</li>
                                    <li>Attempting to access other users' accounts or manipulate their messages.</li>
                                    <li>Introducing viruses or other harmful software into the website.</li>
                                    <li>Accessing systems or networks connected to Kandog without authorization.</li>
                                    <li>Contracting services while being underage or impersonating someone else.</li>
                                </ol><br>
                                <p>
                                    Kandog reserves the right to deny access to users who do not comply with the terms of
                                    use.
                                </p>
    
                                <h2 class="fw-bold">VII. Limitation of Liability</h2>
                                <p>
                                    Kandog does not assume any responsibility for the incorrect use of the website by the
                                    user. It does not guarantee the truthfulness, completeness, or update of the website's
                                    content. Links to third-party sites, not under Kandog's control, do not imply any
                                    association or endorsement, and Kandog is not responsible for their content or use. It
                                    does not assume responsibility for technical errors, data loss, service interruptions,
                                    or any damage arising from the website's use.
                                </p>
                                <p>
                                    Additionally, Kandog is not responsible for the use of information or services that
                                    infringe intellectual property rights, nor for any action by the user that violates
                                    applicable laws. Finally, the company is exempt from responsibility for any indirect,
                                    incidental, special, or consequential damage arising from the website's use or its
                                    services.
                                </p>
    
                                <h2 class="fw-bold">VIII. Jurisdiction and Applicable Law</h2>
                                <p>
                                    This legal notice is governed by Spanish law. Any legal dispute will be resolved in the
                                    courts of Zaragoza.
                                </p>
    
                                <h2 class="fw-bold">IX. Changes to the Legal Notice</h2>
                                <p>
                                    Kandog reserves the right to modify this legal notice at any time. Users are advised to
                                    review this section periodically to learn about any changes.
                                </p>
                            @endif
                            @if (config('app.locale') == 'es')
                                <p>
                                <h2 class="fw-bold">I. Datos identificativos</h2>
                                <p>
                                    En cumplimiento con el deber de información recogido en artículo 10 de la Ley 34/2002,
                                    de 11
                                    de julio, de Servicios de la Sociedad de la Información y del Comercio Electrónico, se
                                    pone
                                    a disposición del usuario la siguiente información identificativa de la empresa
                                    responsable
                                    de este sitio:
                                </p>
                                <ul>
                                    <li>Denominación social: Gabriela Barton Cantín</li>
                                    <li>Nombre comercial: Kandog</li>
                                    <li>NIF: 2536XXXXX</li>
                                    <li>Domicilio: Avenida XXXXXX XXXXXXXX XX</li>
                                    <li>E-mail: edukandog@kandog.es</li>
                                    <li>Registro mercantil de Zaragoza, tomo XX, folio XXX, hoja XXX, inscripción
                                        XXXXXXXXXXX.
                                    </li>
                                </ul><br>
    
                                <h2 class="fw-bold">II. Objeto</h2>
                                <p>
                                    La plataforma de Kandog tiene por objeto facilitar recursos informáticos y organizativos
                                    a
                                    adiestradores y educadores caninos para facilitar su desempeño profesional,
                                    proporcionando
                                    información y herramientas para la gestión de citas, sesiones y otros aspectos
                                    relacionados
                                    con el cuidado y educación de los perros.
                                </p>
    
                                <h2 class="fw-bold">III. Privacidad y tratamiento de datos</h2>
                                <p>
                                    Para acceder a algunos servicios de Kandog, se le puede solicitar al usuario información
                                    personal. Kandog garantiza la confidencialidad y protección de estos datos de acuerdo
                                    con el
                                    Reglamento General de Protección de Datos (RGPD). El usuario puede ejercer sus derechos
                                    de
                                    acceso, rectificación, cancelación, y oposición enviando un correo electrónico a
                                    info@kandog.es o escribiendo a Avenida XXXXXXX, 50015, Zaragoza.
                                </p>
    
                                <h2 class="fw-bold">IV. Cookies</h2>
                                <p>
                                    Kandog utiliza cookies para mejorar la experiencia del usuario y para fines analíticos.
                                    Los
                                    usuarios pueden aceptar o rechazar el uso de cookies en cualquier momento a través de la
                                    configuración de su navegador. Para obtener más información sobre el uso de cookies,
                                    consulte nuestra política de cookies.
                                </p>
    
                                <h2 class="fw-bold">V. Propiedad Intelectual</h2>
                                <p>
                                    Todos los contenidos, incluidos textos, imágenes, sonidos, software, y otros elementos
                                    del
                                    sitio web, son propiedad exclusiva de Kandog o sus licenciantes. Está prohibido el uso,
                                    reproducción, distribución, transmisión, o comunicación pública de estos contenidos sin
                                    el
                                    consentimiento expreso de Kandog.
                                </p>
    
                                <h2 class="fw-bold">VI. Uso del Sitio Web</h2>
                                <p>
                                    El usuario se compromete a hacer un uso adecuado de los contenidos de este sitio web y a
                                    no
                                    emplearlos para actividades ilícitas, ilegales, o contrarias a la buena fe y al orden
                                    público. Queda prohibido:
                                </p>
                                <ol>
                                    <li>Difundir contenidos de carácter racista, xenófobo, pornográfico-ilegal, de apología
                                        del
                                        terrorismo, o que atenten contra los derechos humanos.</li>
                                    <li>Intentar acceder a cuentas de otros usuarios o manipular sus mensajes.</li>
                                    <li>Introducir virus u otros software dañinos en el sitio web.</li>
                                    <li>Acceder sin autorización a sistemas o redes conectadas a Kandog.</li>
                                    <li>Contratar los servicios siendo menor de edad o suplantando la identidad de terceros.
                                    </li>
                                </ol><br>
                                <p>
                                    Kandog se reserva el derecho de denegar acceso a usuarios que incumplan las condiciones
                                    de
                                    uso.
                                </p>
    
                                <h2 class="fw-bold">VII. Limitación de Responsabilidad</h2>
                                <p>
                                    Kandog no asume ninguna responsabilidad derivada del uso incorrecto del sitio web por
                                    parte
                                    del usuario. Tampoco garantiza la veracidad, integridad o actualización de los
                                    contenidos
                                    del sitio web. Los enlaces a sitios de terceros, que no están bajo el control de Kandog,
                                    no
                                    implican ningún tipo de asociación o respaldo, y no se responsabiliza por el contenido o
                                    el
                                    uso de estos sitios. Tampoco asume responsabilidad por errores técnicos, pérdida de
                                    datos,
                                    interrupciones del servicio, o cualquier daño derivado del uso del sitio web.
                                </p>
                                <p>
                                    Adicionalmente, Kandog no se responsabiliza por el uso de información o servicios que
                                    infrinjan derechos de propiedad intelectual, ni por cualquier actuación del usuario que
                                    viole las leyes aplicables. Por último, la empresa se exime de responsabilidad por
                                    cualquier
                                    daño indirecto, incidental, especial o consecuente derivado del uso del sitio web o de
                                    sus
                                    servicios.
                                </p>
    
                                <h2 class="fw-bold">VIII. Jurisdicción y Legislación Aplicable</h2>
                                <p>
                                    Este aviso legal se rige por las leyes de España. Cualquier disputa legal será resuelta
                                    en
                                    los tribunales de la ciudad de Zaragoza.
                                </p>
    
                                <h2 class="fw-bold">IX. Cambios en el Aviso Legal</h2>
                                <p class="mb-0">
                                    Kandog se reserva el derecho de modificar este aviso legal en cualquier momento. Se
                                    recomienda a los usuarios revisar esta sección periódicamente para conocer cualquier
                                    cambio.
                                </p>
                            @endif
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary"
                                data-bs-dismiss="modal">{{ __('OK') }}</button>
                        </div>
                    </div>
                </div>
            </div>
    
            <button type="button" class="boton-foot align-self-center" data-bs-toggle="modal" data-bs-target="#modalPrivacidad">
                {{ __('Privacy Policy') }}
            </button>
            <!-- Modal politica privacidad-->
            <div class="modal fade" id="modalPrivacidad" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-center">
                            <h5 class="modal-title fw-bold fs-3 text-uppercase" id="exampleModalLabel">
                                {{ __('Privacy Policy') }}</h5>
                        </div>
                        <div class="modal-body text-start p-5 pb-2">
                            @if (config('app.locale') == 'es')
                                <h2 class="fw-bold">Información general:</h2>
                                <p>
                                    La web de Kandog cumple con las directrices de la normativa vigente en materia de
                                    protección
                                    de datos personales,
                                    el Reglamento (UE) 2016/679 de 27 de abril de 2016 (RGPD), así como la LO 3/2018, de 5
                                    de
                                    diciembre,
                                    de Protección de Datos Personales y garantía de los derechos digitales. Normativa en
                                    materia
                                    de protección de las personas
                                    físicas en cuanto al tratamiento y la libre circulación de datos personales.
                                </p>
                                <p>
                                    El usuario podrá en cualquier momento ejercitar los derechos de acceso, oposición,
                                    rectificación y cancelación
                                    reconocidos en el citado Reglamento (UE). El ejercicio de estos derechos puede
                                    realizarlo el
                                    propio usuario
                                    a través de un correo electrónico a <a href="mailto:info@kandog.es">info@kandog.es</a> o
                                    mediante correo a la dirección
                                    Avenida XXXXXXX, 50015, Zaragoza.
                                </p>
    
                                <h2 class="fw-bold">Datos que necesitamos:</h2>
                                <p>Para el registro y la relación comercial pueden requerirse datos personales, que pueden
                                    incluir:</p>
                                <ul>
                                    <li> &#8226; Datos de contacto: nombre, correo electrónico, dirección y número de
                                        teléfono.</li>
                                    <li> &#8226; Datos demográficos: edad, género y ubicación.</li>
                                    <li> &#8226; Datos de uso: información sobre el uso de nuestro sitio web, páginas
                                        visitadas y
                                        acciones realizadas.</li>
                                </ul><br>
    
                                <h2 class="fw-bold">Finalidad del tratamiento de los datos personales:</h2>
                                <p>
                                    Los usuarios son los únicos responsables de la veracidad y precisión de los datos
                                    proporcionados. Kandog queda exento de cualquier responsabilidad
                                    por errores o inexactitudes en la información suministrada. Se espera que los usuarios
                                    garanticen la exactitud, autenticidad y completitud de los
                                    datos personales facilitados en los formularios de captación de datos de este sitio web.
                                </p>
                                <p>
                                    Cabe destacar que la provisión de estos datos se realiza de manera voluntaria y su
                                    incorporación a nuestros sistemas de información tiene los
                                    siguientes propósitos:
                                </p>
                                <ul>
                                    <li>
                                        <i>Formulario de contacto:</i> Los datos recogidos (como nombre, apellidos y
                                        correo electrónico) se utilizan para responder a la
                                        consulta realizada, siendo la legitimación correspondiente derivada de la relación
                                        precontractual entre las partes.
                                    </li>
                                    <li>
                                        <i>Formulario de servicios y/o productos:</i> Estos datos permiten mantener la
                                        relación contractual y gestionar la prestación de
                                        servicios. El tratamiento de estos datos se basa en la relación contractual entre
                                        las
                                        partes.
                                    </li>
                                    <li>
                                        <i>Comunicaciones:</i> Para actualizaciones de servicios, promociones y
                                        noticias, se ofrece la opción de mantenerse informado
                                        a través de un correo electrónico personal. Te recordamos que puedes oponerte al
                                        envío
                                        de comunicaciones comerciales por cualquier vía y en cualquier momento,
                                        remitiendo un correo electrónico a la dirección indicada anteriormente.
                                    </li>
                                </ul><br>
    
                                <h2 class="fw-bold">¿Por cuánto tiempo se conservan los datos personales recabados?</h2>
                                <p>
                                    Los datos personales proporcionados se conservarán mientras se mantenga la relación
                                    comercial o no se solicite su supresión,
                                    y durante el plazo por el cual pudieran derivarse responsabilidades legales por los
                                    servicios prestados, con un máximo de un año.
                                </p>
    
                                <h2 class="fw-bold">Encargados del tratamiento de datos:</h2>
                                <p>
                                    No se ceden datos de carácter personal a terceros, salvo disposición legal. Tampoco se
                                    realizan transferencias internacionales de datos a terceros países.
                                    Como encargados de tratamiento, tenemos contratados a los siguientes proveedores de
                                    servicios, habiéndose comprometido al cumplimiento de las disposiciones normativas,
                                    de aplicación en materia de protección de datos, en el momento de su contratación:
                                </p>
                                <ul>
                                    <li>
                                        <i> &#8226; Encargado de protección de datos:</i> Con domicilio en una empresa muy
                                        chula, NIF/CIF XXXXXXXXXXX,
                                        presta servicios de computación en la nube, de medición y de correo electrónico.
                                        Puede
                                        consultar la política de privacidad
                                        y demás aspectos legales de la compañía en el siguiente enlace: <a
                                            href="http://www.empresamuychula.org">www.empresamuychula.org</a>.
                                    </li>
                                </ul><br>
    
                                <h2 class="fw-bold">Datos recopilados por usuarios de los servicios:</h2>
                                <p>
                                    En los casos en que el usuario incluya ficheros con datos de carácter personal en los
                                    servidores de alojamiento compartido, Kandog no se hace responsable
                                    del incumplimiento por parte del usuario del RGPD.
                                </p>
    
                                <h2 class="fw-bold">Retención de datos en conformidad a la LSSI:</h2>
                                <p>
                                    Kandog informa de que, como prestador de servicio de alojamiento de datos y en virtud de
                                    lo
                                    establecido en la Ley 34/2002 de 11 de julio de Servicios
                                    de la Sociedad de la Información y de Comercio Electrónico (LSSI), retiene por un
                                    periodo
                                    máximo de 12 meses la información imprescindible para identificar el origen de los datos
                                    alojados
                                    y el momento en que se inició la prestación del servicio. La retención de estos datos no
                                    afecta al secreto de las comunicaciones y sólo podrán ser utilizados en el marco
                                    de una investigación criminal o para la salvaguardia de la seguridad pública, poniéndose
                                    a
                                    disposición de los jueces y/o tribunales o del Ministerio que así los requiera.
                                </p>
    
                                <h2 class="fw-bold">Derechos de propiedad intelectual:</h2>
                                <p>
                                    Kandog es titular de todos los derechos de autor, propiedad intelectual, industrial,
                                    “know
                                    how” y cuantos otros derechos guardan relación con los contenidos del sitio web
                                    y los servicios ofertados en el mismo, así como de los programas necesarios para su
                                    implementación y la información relacionada.
                                    No se permite la reproducción, publicación y/o uso no estrictamente privado de los
                                    contenidos, totales o parciales, del sitio web sin el consentimiento previo
                                    y por escrito de Kandog.
                                </p>
    
                                <h2 class="fw-bold">Propiedad intelectual del software:</h2>
                                <p>
                                    El usuario debe respetar los programas de terceros puestos a su disposición por Kandog,
                                    aun
                                    siendo gratuitos y/o de disposición pública.
                                    Kandog dispone de los derechos de explotación y propiedad intelectual necesarios del
                                    software. El usuario no adquiere derecho alguno o licencia por el servicio contratado,
                                    sobre el software necesario para la prestación del servicio, ni tampoco sobre la
                                    información
                                    técnica de seguimiento del servicio, excepción hecha de los derechos
                                    y licencias necesarios para el cumplimiento de los servicios contratados y únicamente
                                    durante la duración de los mismos.
                                </p>
    
                                <h2 class="fw-bold">Propiedad intelectual de los contenidos alojados:</h2>
                                <p>
                                    Se prohíbe el uso contrario a la legislación sobre propiedad intelectual de los
                                    servicios
                                    prestados por Kandog y, en particular, de:
                                </p>
                                <ul>
                                    <li>1. La utilización que resulte contraria a las leyes españolas o que infrinja los
                                        derechos
                                        de terceros.</li>
                                    <li>2. La publicación o la transmisión de cualquier contenido que, a juicio de Kandog,
                                        resulte
                                        violento, obsceno, abusivo, ilegal, racial, xenófobo o difamatorio.</li>
                                    <li>3. Los “cracks”, números de serie de programas o cualquier otro contenido que
                                        vulnere
                                        derechos de la propiedad intelectual de terceros.</li>
                                    <li>4. La recogida y/o utilización de datos personales de otros usuarios sin su
                                        consentimiento
                                        expreso o contraviniendo lo dispuesto en el Reglamento (UE) 2016/679 del Parlamento
                                        Europeo.</li>
                                    <li>5. La utilización del servidor de correo del dominio y de las direcciones de correo
                                        electrónico para el envío de correo masivo no deseado.</li>
                                </ul><br>
    
                                <h2 class="fw-bold">Derechos de terceros y protección de menores:</h2>
                                <p>
                                    El usuario es responsable respecto a las leyes y reglamentos en vigor y las reglas que
                                    tienen que ver con el funcionamiento del servicio online, comercio electrónico,
                                    derechos de autor, mantenimiento del orden público, así como principios universales de
                                    uso
                                    de Internet. El usuario indemnizará a Kandog por los gastos que generara la imputación
                                    en alguna causa cuya responsabilidad fuera atribuible al usuario, incluidos honorarios y
                                    gastos de defensa jurídica.
                                </p>
    
                                <h2 class="fw-bold">Protección de la información alojada:</h2>
                                <p>
                                    Kandog realiza copias de seguridad de los contenidos alojados en sus servidores, pero no
                                    se
                                    responsabiliza de la pérdida o borrado accidental de los datos por parte de los
                                    usuarios.
                                    De igual manera, no garantiza la reposición total de los datos borrados por los
                                    usuarios, ya
                                    que los citados datos podrían haber sido suprimidos y/o modificados durante el periodo
                                    del
                                    tiempo transcurrido
                                    desde la última copia de seguridad.
                                </p>
                                <p>
                                    Los servicios ofertados, excepto los servicios específicos de “backup”, no incluyen la
                                    reposición de los contenidos conservados en las copias de seguridad realizadas por la
                                    empresa
                                    cuando esta pérdida sea imputable al usuario.
                                </p>
    
                                <h2 class="fw-bold">Comunicaciones comerciales:</h2>
                                <p>
                                    En aplicación de la LSSI, Kandog no enviará comunicaciones publicitarias o promocionales
                                    por
                                    correo electrónico u otro medio de comunicación electrónica
                                    equivalente que previamente no hubieran sido solicitadas o expresamente autorizadas por
                                    los
                                    destinatarios de las mismas.
                                </p>
                            @endif
                            @if (config('app.locale') == 'en')
                                <h2 class="fw-bold">General Information:</h2>
                                <p>
                                    The Kandog website complies with the guidelines of the current regulations on personal
                                    data protection,
                                    specifically, Regulation (EU) 2016/679 of April 27, 2016 (GDPR), as well as Law 3/2018
                                    of December 5,
                                    on the Protection of Personal Data and the guarantee of digital rights. These
                                    regulations focus on the
                                    protection of natural persons in terms of the processing and free movement of personal
                                    data.
                                </p>
                                <p>
                                    Users can exercise their rights of access, opposition, rectification, and cancellation
                                    as recognized by the aforementioned Regulation (EU). These rights can be exercised by
                                    sending an email to <a href="mailto:info@kandog.es">info@kandog.es</a> or by mailing to
                                    Avenida XXXXXXX, 50015, Zaragoza.
                                </p>
    
                                <h2 class="fw-bold">Data We Require:</h2>
                                <p>For registration and commercial relations, personal data may be required, which may
                                    include:</p>
                                <ul>
                                    <li>• Contact data: name, email, address, and phone number.</li>
                                    <li>• Demographic data: age, gender, and location.</li>
                                    <li>• Usage data: information on the use of our website, pages visited, and actions
                                        taken.</li>
                                </ul><br>
    
                                <h2 class="fw-bold">Purpose of Personal Data Processing:</h2>
                                <p>
                                    Users are solely responsible for the accuracy and precision of the data provided. Kandog
                                    is not liable for any errors or inaccuracies in the information provided. Users are
                                    expected to ensure the accuracy, authenticity, and completeness of the personal data
                                    provided through the data collection forms on this website.
                                </p>
                                <p>
                                    It should be noted that providing this data is voluntary, and its inclusion in our
                                    information systems has the following purposes:
                                </p>
                                <ul>
                                    <li>
                                        <i>Contact Form:</i> The data collected (such as name, surname, and email) is used
                                        to respond to the inquiry made, with the corresponding legitimacy derived from the
                                        pre-contractual relationship between the parties.
                                    </li>
                                    <li>
                                        <i>Services and/or Products Form:</i> This data allows maintaining the contractual
                                        relationship and managing the provision of services. The processing of this data is
                                        based on the contractual relationship between the parties.
                                    </li>
                                    <li>
                                        <i>Communications:</i> For service updates, promotions, and news, users are offered
                                        the option to stay informed through a personal email. Please note that you can opt
                                        out of receiving commercial communications at any time by sending an email to the
                                        address mentioned above.
                                    </li>
                                </ul><br>
    
                                <h2 class="fw-bold">How Long Are the Collected Personal Data Retained?</h2>
                                <p>
                                    The personal data provided will be retained while the commercial relationship is
                                    maintained or until its deletion is requested, and during the period for which legal
                                    responsibilities may arise from the provided services, with a maximum of one year.
                                </p>
    
                                <h2 class="fw-bold">Data Processing Managers:</h2>
                                <p>
                                    Personal data is not transferred to third parties, except for legal requirements. No
                                    international data transfers to third countries are made. The following service
                                    providers are contracted as data processors, having committed to complying with
                                    applicable data protection regulations at the time of their engagement:
                                </p>
                                <ul>
                                    <li>
                                        <i>• Data Protection Manager:</i> With an address at a very cool company, NIF/CIF
                                        XXXXXXXXXXX, providing cloud computing, measurement, and email services. You can
                                        consult the company's privacy policy and other legal aspects at the following link:
                                        <a href="http://www.empresamuychula.org">www.empresamuychula.org</a>.
                                    </li>
                                </ul><br>
    
                                <h2 class="fw-bold">Data Collected by Users of the Services:</h2>
                                <p>
                                    In cases where the user includes files with personal data on shared hosting servers,
                                    Kandog is not responsible for the user's non-compliance with GDPR.
                                </p>
    
                                <h2 class="fw-bold">Data Retention in Compliance with LSSI:</h2>
                                <p>
                                    Kandog informs that, as a data hosting service provider and under the provisions of Law
                                    34/2002 of July 11, on Services of the Information Society and Electronic Commerce
                                    (LSSI), it retains information for a maximum period of 12 months to identify the origin
                                    of the stored data and the moment when the service began. The retention of this data
                                    does not affect the secrecy of communications and can only be used within the framework
                                    of a criminal investigation or to safeguard public safety, being made available to
                                    judges and/or courts or the Ministry that requires it.
                                </p>
    
                                <h2 class="fw-bold">Intellectual Property Rights:</h2>
                                <p>
                                    Kandog owns all copyrights, intellectual property rights, industrial rights, "know-how,"
                                    and other rights related to the website's content and the services offered. The
                                    reproduction, publication, and/or use not strictly private of the website's content, in
                                    whole or in part, without the prior written consent of Kandog, is prohibited.
                                </p>
    
                                <h2 class="fw-bold">Intellectual Property of the Software:</h2>
                                <p>
                                    The user must respect the third-party software provided by Kandog, even if it is free
                                    and/or publicly available. Kandog has the necessary intellectual property rights for
                                    software exploitation. The user does not acquire any right or license by contracting the
                                    service regarding the software required for the provision of the service, nor for the
                                    technical information for service tracking, except for the necessary rights and licenses
                                    for fulfilling the contracted services, and only for the duration of the same.
                                </p>
    
                                <h2 class="fw-bold">Intellectual Property of Hosted Content:</h2>
                                <p>
                                    The use of Kandog's services in a way that violates intellectual property laws is
                                    prohibited, including:
                                </p>
                                <ul>
                                    <li>1. Using the service in a manner that violates Spanish laws or infringes the rights
                                        of third parties.</li>
                                    <li>2. Publishing or transmitting content that, in Kandog's opinion, is violent,
                                        obscene, abusive, illegal, racial, xenophobic, or defamatory.</li>
                                    <li>3. Using "cracks," serial numbers for software, or any other content that violates
                                        third-party intellectual property rights.</li>
                                    <li>4. Collecting and/or using personal data from other users without their express
                                        consent or in violation of Regulation (EU) 2016/679 of the European Parliament.</li>
                                    <li>5. Using the email server of the domain and email addresses for sending unsolicited
                                        mass emails.</li>
                                </ul><br>
    
                                <h2 class="fw-bold">Rights of Third Parties and Protection of Minors:</h2>
                                <p>
                                    The user is responsible for complying with applicable laws and regulations, and rules
                                    related to the operation of online services, e-commerce, copyright, public order
                                    maintenance, and universal principles of Internet use. The user will indemnify Kandog
                                    for any costs incurred from any cause for which the user is responsible, including legal
                                    fees and defense costs.
                                </p>
    
                                <h2 class="fw-bold">Protection of Hosted Information:</h2>
                                <p>
                                    Kandog creates backups of the content hosted on its servers, but it is not responsible
                                    for data loss or accidental deletion by users. It also does not guarantee full
                                    restoration of data deleted by users, as the data could have been deleted and/or
                                    modified during the time since the last backup.
                                </p>
                                <p>
                                    The services offered, except for specific "backup" services, do not include restoring
                                    content from backups when the loss is attributable to the user.
                                </p>
    
                                <h2 class="fw-bold">Commercial Communications:</h2>
                                <p>
                                    In compliance with LSSI, Kandog will not send advertising or promotional communications
                                    via email or other electronic communication channels unless they have been previously
                                    requested or expressly authorized by the intended recipients.
                                </p>
                            @endif
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary"
                                data-bs-dismiss="modal">{{ __('OK') }}</button>
                        </div>
                    </div>
                </div>
            </div>
    
            <button type="button" class="boton-foot align-self-center" data-bs-toggle="modal" data-bs-target="#modalCookies">
                {{ __('Cookies policy') }}
            </button>
            <!-- Modal politica cookies-->
            <div class="modal fade" id="modalCookies" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-center">
                            <h5 class="modal-title fw-bold fs-3 text-uppercase" id="exampleModalLabel">
                                {{ __('Cookies policy') }}</h5>
                        </div>
                        <div class="modal-body text-start p-5 pb-2">
                            @if (config('app.locale') == 'es')
                                <h2 class="fw-bold">¿Qué son las cookies?</h2>
                                <p>
                                    Las cookies son archivos que se pueden descargar en su equipo a través de las páginas
                                    web.
                                    Son herramientas que tienen un papel esencial
                                    para la prestación de numerosos servicios de la sociedad de la información. Entre otros,
                                    permiten a una página web almacenar y recuperar
                                    información sobre los hábitos de navegación de un usuario o de su equipo y, dependiendo
                                    de
                                    la información obtenida, se pueden utilizar para
                                    reconocer al usuario y mejorar el servicio ofrecido.
                                </p>
    
                                <h2 class="fw-bold">Tipos de cookies</h2>
                                <p>Según quien sea la entidad que gestione el dominio desde donde se envían las cookies y
                                    trate
                                    los datos que se obtengan, se pueden distinguir dos tipos:</p>
                                <ul>
                                    <li>
                                        <i>Cookies propias:</i> aquellas que se envían al equipo terminal del usuario desde
                                        un
                                        equipo o dominio gestionado por el propio editor
                                        y desde el que se presta el servicio solicitado por el usuario.
                                    </li>
                                    <li>
                                        <i>Cookies de terceros:</i> aquellas que se envían al equipo terminal del usuario
                                        desde
                                        un equipo o dominio que no es gestionado por
                                        el editor sino por otra entidad que trata los datos obtenidos de las cookies.
                                    </li>
                                </ul><br>
    
                                <p>
                                    En el caso de que las cookies sean instaladas desde un equipo o dominio gestionado por
                                    el
                                    propio editor pero la información que se recoja mediante éstas
                                    sea gestionada por un tercero, no pueden ser consideradas como cookies propias.
                                </p>
                                <p>
                                    Existe también una segunda clasificación según el plazo de tiempo que permanecen
                                    almacenadas
                                    en el navegador del cliente, pudiendo tratarse de:
                                </p>
                                <ul>
                                    <li>
                                        <i>Cookies de sesión:</i> diseñadas para recabar y almacenar datos mientras el
                                        usuario
                                        accede a una página web. Se suelen emplear para almacenar
                                        información que solo interesa conservar para la prestación del servicio solicitado
                                        por
                                        el usuario en una sola ocasión (por ejemplo, una lista de productos adquiridos).
                                    </li>
                                    <li>
                                        <i>Cookies persistentes:</i> los datos siguen almacenados en el terminal y pueden
                                        ser
                                        accedidos y tratados durante un periodo definido por el responsable
                                        de la cookie, desde unos minutos a varios años.
                                    </li>
                                </ul><br>
    
                                <p>
                                    Por último, existe otra clasificación según la finalidad para la que se traten los datos
                                    obtenidos:
                                </p>
                                <ul>
                                    <li>
                                        <i>Cookies técnicas:</i> aquellas que permiten al usuario la navegación a través de
                                        una
                                        página web, plataforma o aplicación y la utilización
                                        de las diferentes opciones o servicios que en ella existan, como, por ejemplo,
                                        controlar
                                        el tráfico y la comunicación de datos, identificar la sesión,
                                        acceder a partes de acceso restringido, recordar los elementos que integran un
                                        pedido,
                                        realizar el proceso de compra de un pedido, realizar la solicitud
                                        de inscripción o participación en un evento, utilizar elementos de seguridad durante
                                        la
                                        navegación, almacenar contenidos para la difusión de vídeos
                                        o sonido, o compartir contenidos a través de redes sociales.
                                    </li>
                                    <li>
                                        <i>Cookies de personalización:</i> permiten al usuario acceder al servicio con
                                        algunas
                                        características de carácter general predefinidas en función de
                                        una serie de criterios en el terminal del usuario, como el idioma, el tipo de
                                        navegador
                                        a través del cual accede al servicio, o la configuración regional
                                        desde donde accede al servicio.
                                    </li>
                                    <li>
                                        <i>Cookies de análisis:</i> permiten al responsable de las mismas, el seguimiento y
                                        análisis del comportamiento de los usuarios de los sitios web
                                        a los que están vinculadas. La información recogida mediante este tipo de cookies se
                                        utiliza en la medición de la actividad de los sitios web, aplicación
                                        o plataforma, y para la elaboración de perfiles de navegación de los usuarios de
                                        dichos
                                        sitios, con el fin de introducir mejoras en función del análisis
                                        de los datos de uso que hacen los usuarios del servicio.
                                    </li>
                                    <li>
                                        <i>Cookies publicitarias:</i> permiten la gestión de la forma más eficaz posible de
                                        los
                                        espacios publicitarios.
                                    </li>
                                    <li>
                                        <i>Cookies de publicidad comportamental:</i> almacenan información del
                                        comportamiento de
                                        los usuarios obtenida a través de la observación continuada
                                        de sus hábitos de navegación, lo que permite desarrollar un perfil específico para
                                        mostrar publicidad en función del mismo.
                                    </li>
                                    <li>
                                        <i>Cookies de redes sociales externas:</i> se utilizan para que los visitantes
                                        puedan
                                        interactuar con el contenido de diferentes plataformas sociales
                                        (Facebook, YouTube, Twitter, LinkedIn, etc.) y se generan únicamente para los
                                        usuarios
                                        de dichas redes sociales. Las condiciones de utilización de estas cookies
                                        y la información recopilada se regula por la política de privacidad de la plataforma
                                        social correspondiente.
                                    </li>
                                </ul><br>
    
                                <h2 class="fw-bold">Desactivación y eliminación de cookies</h2>
                                <p>
                                    Tienes la opción de permitir, bloquear o eliminar las cookies instaladas en tu equipo
                                    mediante la configuración de las opciones del navegador instalado en su equipo.
                                    Al desactivar cookies, algunos de los servicios disponibles podrían dejar de estar
                                    operativos. La forma de deshabilitar las cookies es diferente para cada navegador,
                                    pero normalmente puede hacerse desde el menú Herramientas u Opciones. También puede
                                    consultarse el menú de Ayuda del navegador para obtener instrucciones.
                                    El usuario podrá en cualquier momento elegir qué cookies quiere que funcionen en este
                                    sitio
                                    web.
                                </p>
                                <p>
                                    Puede usted permitir, bloquear o eliminar las cookies instaladas en su equipo mediante
                                    la
                                    configuración de las opciones del navegador instalado en su ordenador:
                                </p>
                                <ul>
                                    <li>
                                        <a href="http://windows.microsoft.com/es-es/windows-vista/Block-or-allow-cookies"
                                            target="_blank">Microsoft Internet Explorer o Microsoft Edge</a>
                                    </li>
                                    <li>
                                        <a href="http://support.mozilla.org/es/kb/impedir-que-los-sitios-webguarden-sus-preferencia"
                                            target="_blank">Mozilla Firefox</a>
                                    </li>
                                    <li>
                                        <a href="https://support.google.com/accounts/answer/61416?hl=es"
                                            target="_blank">Chrome</a>
                                    </li>
                                    <li>
                                        <a href="http://safari.helpmax.net/es/privacidad-y-seguridad/como-gestionar-las-cookies/"
                                            target="_blank">Safari</a>
                                    </li>
                                    <li>
                                        <a href="http://help.opera.com/Linux/10.60/es-ES/cookies.html"
                                            target="_blank">Opera</a>
                                    </li>
                                </ul><br>
    
                                <h2 class="fw-bold">Declaración de cookies utilizadas en Kandog</h2><br>
                                <table class="table-bordered" border="1" cellpadding="5">
                                    <thead>
                                        <tr>
                                            <th class="bg-light">Nombre</th>
                                            <th class="bg-light">Propietario</th>
                                            <th class="bg-light">Duración</th>
                                            <th class="bg-light">Tipo de cookie</th>
                                            <th class="bg-light">Finalidad</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Google Analytics</td>
                                            <td>Google Inc</td>
                                            <td>2 años</td>
                                            <td>Seguimiento</td>
                                            <td>Recopila información sobre cómo los visitantes usan un sitio web. Permiten
                                                generar informes de actividad en el sitio.</td>
                                        </tr>
                                        <tr>
                                            <td>Session_ID</td>
                                            <td>Kandog</td>
                                            <td>Sesión</td>
                                            <td>Sesión</td>
                                            <td>Mantiene la sesión del usuario activa mientras navega por el sitio web.
                                                Recuerda
                                                sus preferencias.</td>
                                        </tr>
                                    </tbody>
                                </table><br>
    
                                <h2 class="fw-bold">Aceptación de la Política de cookies</h2>
                                <p>
                                    Kandog asume que usted acepta el uso de cookies. No obstante, se muestra información
                                    sobre
                                    su Política de cookies en la parte inferior o superior de cualquier
                                    página del portal con cada inicio de sesión con el objeto de que usted sea consciente.
                                </p>
                                <p>
                                    Ante esta información es posible llevar a cabo las siguientes acciones:
                                </p>
                                <ul>
                                    <li><u>Aceptar cookies.</u> No se volverá a visualizar este aviso al acceder a cualquier
                                        página
                                        del
                                        portal durante la presente sesión.</li>
                                    <li><u>Cerrar.</u> Se oculta el aviso en la presente página.</li>
                                    <li><u>Modificar su configuración.</u> En el apartado de este mismo documento sobre
                                        desactivación y
                                        eliminación de cookies se especifica la configuración específica de cada navegador
                                        para
                                        que decida cómo quiere modificarlas.</li>
                                </ul><br>
                            @endif
    
                            @if (config('app.locale') == 'en')
                                <h2 class="fw-bold">What Are Cookies?</h2>
                                <p>
                                    Cookies are files that can be downloaded onto your device through web pages. They are
                                    tools that play an essential role in providing various information society services.
                                    Among other things, they allow a website to store and retrieve information about a
                                    user's browsing habits or device, and depending on the information obtained, they can be
                                    used to recognize the user and improve the service provided.
                                </p>
    
                                <h2 class="fw-bold">Types of Cookies</h2>
                                <p>Depending on who is responsible for managing the domain from which the cookies are sent
                                    and who processes the obtained data, two types of cookies can be distinguished:</p>
                                <ul>
                                    <li>
                                        <i>First-party cookies:</i> Those sent to the user's terminal from a device or
                                        domain managed by the website owner and from which the requested service is
                                        provided.
                                    </li>
                                    <li>
                                        <i>Third-party cookies:</i> Those sent to the user's terminal from a device or
                                        domain not managed by the website owner, but by another entity that processes the
                                        data obtained from the cookies.
                                    </li>
                                </ul><br>
    
                                <p>
                                    If cookies are installed from a device or domain managed by the website owner, but the
                                    information collected is managed by a third party, they cannot be considered first-party
                                    cookies.
                                </p>
                                <p>
                                    There is also a second classification according to the time they remain stored in the
                                    client's browser:
                                </p>
                                <ul>
                                    <li>
                                        <i>Session cookies:</i> Designed to collect and store data while the user accesses a
                                        web page. They are usually used to store information only relevant for providing the
                                        requested service on a single occasion (e.g., a list of purchased products).
                                    </li>
                                    <li>
                                        <i>Persistent cookies:</i> The data remains stored in the device and can be accessed
                                        and processed for a period defined by the cookie owner, ranging from a few minutes
                                        to several years.
                                    </li>
                                </ul><br>
    
                                <p>
                                    Finally, there is another classification according to the purpose for which the
                                    collected data is processed:
                                </p>
                                <ul>
                                    <li>
                                        <i>Technical cookies:</i> Those that allow users to navigate through a web page,
                                        platform, or application and use the different options or services it provides, such
                                        as controlling traffic and data communication, identifying sessions, accessing
                                        restricted areas, remembering items in a shopping cart, completing a purchase
                                        process, requesting registration or participation in an event, using security
                                        elements during browsing, storing content for video or audio distribution, or
                                        sharing content through social networks.
                                    </li>
                                    <li>
                                        <i>Personalization cookies:</i> Allow users to access the service with some general
                                        characteristics predefined based on a set of criteria on the user's device, such as
                                        language, browser type, or regional configuration.
                                    </li>
                                    <li>
                                        <i>Analysis cookies:</i> Allow the owner to monitor and analyze the behavior of
                                        users on websites linked to these cookies. The information collected through this
                                        type of cookie is used to measure website, application, or platform activity and
                                        create user browsing profiles to introduce improvements based on the analysis of the
                                        data used.
                                    </li>
                                    <li>
                                        <i>Advertising cookies:</i> Allow the management of advertising spaces in the most
                                        efficient way.
                                    </li>
                                    <li>
                                        <i>Behavioral advertising cookies:</i> Store information about users' behavior
                                        obtained through continuous observation of their browsing habits, allowing a
                                        specific profile to be developed to show advertising based on this profile.
                                    </li>
                                    <li>
                                        <i>External social network cookies:</i> Used so visitors can interact with content
                                        from different social platforms (Facebook, YouTube, Twitter, LinkedIn, etc.) and are
                                        generated only for users of these social networks. The conditions for using these
                                        cookies and the information collected are governed by the privacy policy of the
                                        respective social platform.
                                    </li>
                                </ul><br>
    
                                <h2 class="fw-bold">Disabling and Deleting Cookies</h2>
                                <p>
                                    You have the option to allow, block, or delete cookies installed on your device through
                                    your browser's settings. By disabling cookies, some available services may no longer
                                    operate. The method to disable cookies is different for each browser, but it is
                                    generally done through the Tools or Options menu. You can also check the Help menu of
                                    your browser for instructions. Users can choose at any time which cookies they want to
                                    operate on this website.
                                </p>
                                <p>
                                    You can allow, block, or delete cookies installed on your device through your browser's
                                    settings:
                                </p>
                                <ul>
                                    <li>
                                        <a href="http://windows.microsoft.com/es-es/windows-vista/Block-or-allow-cookies"
                                            target="_blank">Microsoft Internet Explorer or Microsoft Edge</a>
                                    </li>
                                    <li>
                                        <a href="http://support.mozilla.org/es/kb/impedir-que-los-sitios-webguarden-sus-preferencia"
                                            target="_blank">Mozilla Firefox</a>
                                    </li>
                                    <li>
                                        <a href="https://support.google.com/accounts/answer/61416?hl=es"
                                            target="_blank">Chrome</a>
                                    </li>
                                    <li>
                                        <a href="http://safari.helpmax.net/es/privacidad-y-seguridad/como-gestionar-las-cookies/"
                                            target="_blank">Safari</a>
                                    </li>
                                    <li>
                                        <a href="http://help.opera.com/Linux/10.60/es-ES/cookies.html"
                                            target="_blank">Opera</a>
                                    </li>
                                </ul><br>
    
                                <h2 class="fw-bold">Declaration of Cookies Used in Kandog</h2><br>
                                <table class="table-bordered" border="1" cellpadding="5">
                                    <thead>
                                        <tr>
                                            <th class="bg-light">Name</th>
                                            <th class="bg-light">Owner</th>
                                            <th class="bg-light">Duration</th>
                                            <th class="bg-light">Cookie Type</th>
                                            <th class="bg-light">Purpose</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Google Analytics</td>
                                            <td>Google Inc</td>
                                            <td>2 years</td>
                                            <td>Tracking</td>
                                            <td>Collects information about how visitors use a website, allowing activity
                                                reports to be generated on the site.</td>
                                        </tr>
                                        <tr>
                                            <td>Session_ID</td>
                                            <td>Kandog</td>
                                            <td>Session</td>
                                            <td>Session</td>
                                            <td>Keeps the user's session active while browsing the website, remembering
                                                their preferences.</td>
                                        </tr>
                                    </tbody>
                                </table><br>
    
                                <h2 class="fw-bold">Acceptance of the Cookie Policy</h2>
                                <p>
                                    Kandog assumes that you accept the use of cookies. However, information about its Cookie
                                    Policy is displayed at the bottom or top of any portal page with each session's start,
                                    so you are aware.
                                </p>
                                <p>
                                    Upon receiving this information, you can perform the following actions:
                                </p>
                                <ul>
                                    <li><u>Accept cookies.</u> This notice will not be displayed again when accessing any
                                        page on
                                        the portal during the current session.</li>
                                    <li><u>Close.</u> This notice is hidden on the current page.</li>
                                    <li><u>Change your settings.</u> In the section on disabling and deleting cookies, the
                                        specific
                                        configuration for each browser is specified to allow you to decide how to adjust it.
                                    </li>
                                </ul><br>
                            @endif
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary"
                                data-bs-dismiss="modal">{{ __('OK') }}</button>
                        </div>
                    </div>
                </div>
            </div>
    
            <button type="button" class="boton-foot align-self-center" data-bs-toggle="modal" data-bs-target="#modalCondicionesVenta">
                {{ __('Terms of sale') }}
            </button>
            <!-- Modal condiciones venta-->
            <div class="modal fade" id="modalCondicionesVenta" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-center">
                            <h5 class="modal-title fw-bold fs-3" id="exampleModalLabel">{{ __('Terms of sale') }}</h5>
                        </div>
                        <div class="modal-body text-start p-5 pb-2">
                            @if (config('app.locale') == 'es')
                                <p>
                                    Bienvenido a Kandog. Este documento de condiciones de contratación establece los
                                    términos y condiciones bajo
                                    los cuales ofrecemos nuestros servicios y productos. Al utilizar nuestro sitio web o
                                    contratar nuestros servicios, aceptas estos términos.
                                </p>
    
                                <h2 class="fw-bold">Información del Contratante</h2>
                                <p>
                                    El sitio web de Kandog es operado por Gabriela Barton Cantín, con CIF 2536XXXXX, y
                                    domicilio en Avenida XXXXXXXX, 50015, Zaragoza. Para cualquier consulta sobre estas
                                    condiciones de contratación, puedes contactarnos a través del correo electrónico <a
                                        href="mailto:info@kandog.es">info@kandog.es</a> o por el número de teléfono
                                    666-XXXXX.
                                </p>
    
                                <h2 class="fw-bold">Servicios Ofrecidos</h2>
                                <p>
                                    Kandog proporciona una plataforma de gestión de recursos relacionados con el cuidado y
                                    la educación de los perros. Los detalles sobre los diferentes planes de suscripción se
                                    encuentran en el sitio web. Los adiestradores pueden seleccionar entre suscripciones
                                    mensuales y anuales.
                                </p>
    
                                <h2 class="fw-bold">Precios y Métodos de Pago</h2>
                                <p>
                                    Los precios de nuestros servicios y productos están indicados en el sitio web. Nos
                                    reservamos el derecho de modificar los precios en cualquier momento, pero los cambios no
                                    afectarán a contratos ya celebrados. Para suscripciones mensuales, cualquier cambio en
                                    las tarifas se aplicará en el siguiente ciclo de facturación tras la notificación del
                                    cambio. Aceptamos como métodos de pago tarjetas de crédito/débito y transferencias
                                    bancarias al número de cuenta XXXX-XXXX-XXXXX-XXXXX.
                                </p>
    
                                <h2 class="fw-bold">Pago y Renovación</h2>
                                <p>
                                    Las suscripciones a la plataforma Kandog se renuevan automáticamente al final de cada
                                    período, ya sea mensual o anual, a menos que se cancelen con antelación. Los pagos se
                                    efectúan el día 3 de cada mes para suscripciones mensuales y en la fecha de inicio del
                                    plan para suscripciones anuales. La renovación de suscripción es automática.
                                </p>
    
                                <h2 class="fw-bold">Política de Cancelación y Reembolsos</h2>
                                <p>
                                    Los usuarios pueden cancelar su suscripción siguiendo las instrucciones detalladas en el
                                    sitio web. Para evitar la renovación automática de una suscripción mensual, se debe
                                    cancelar antes del día 25 del mes anterior. Las suscripciones anuales deben cancelarse
                                    al menos 15 días antes del final del período anual para evitar la renovación automática.
                                    Puedes cancelar tu suscripción a través del sitio web o contactando con Kandog a través
                                    de <a href="mailto:info@kandog.es">info@kandog.es</a>. Se otorgará reembolso para
                                    nuevos usuarios si, después de 21 días, se decide que el producto no ha satisfecho sus
                                    necesidades y no quiere seguir empleando la plataforma.
                                </p>
    
                                <h2 class="fw-bold">Responsabilidades del Usuario</h2>
                                <p>
                                    El usuario se compromete a proporcionar información precisa y verídica durante el
                                    proceso de contratación y a seguir las normas de uso del sitio web. El uso indebido o
                                    ilegal del sitio web puede dar lugar a la terminación de la relación contractual sin
                                    previo aviso.
                                </p>
    
                                <h2 class="fw-bold">Limitación de Responsabilidad</h2>
                                <p>
                                    Kandog no será responsable por daños derivados del uso del sitio web o de la
                                    contratación de servicios, salvo en caso de negligencia grave o dolo. Tampoco es
                                    responsable por errores técnicos, pérdida de datos o interrupciones del servicio.
                                </p>
    
                                <h2 class="fw-bold">Ley Aplicable y Jurisdicción</h2>
                                <p>
                                    Estas condiciones de contratación se regirán por las leyes de España. Cualquier disputa
                                    relacionada con estas condiciones o el uso del sitio web será resuelta por los
                                    tribunales de Zaragoza.
                                </p>
    
                                <h2 class="fw-bold">Cambios en las Condiciones de Contratación</h2>
                                <p>
                                    Kandog se reserva el derecho de modificar estas condiciones de contratación en cualquier
                                    momento. Cualquier cambio será comunicado a través del sitio web. Al continuar
                                    utilizando nuestros servicios, aceptas los cambios realizados.
                                </p>
    
                                <h2 class="fw-bold">Contacto</h2>
                                <p>
                                    Para cualquier pregunta sobre estas condiciones de contratación o para resolver
                                    problemas relacionados con nuestros servicios, puedes contactarnos a través de <a
                                        href="mailto:info@kandog.es">info@kandog.es</a> o por el número de teléfono
                                    666-XXXXX.
                                </p>
                            @endif
                            @if (config('app.locale') == 'en')
                                <p>
                                    Welcome to Kandog. This document outlining the terms and conditions of service describes
                                    the terms under which we offer our services and products. By using our website or
                                    contracting our services, you agree to these terms.
                                </p>
    
                                <h2 class="fw-bold">Contractor Information</h2>
                                <p>
                                    The Kandog website is operated by Gabriela Barton Cantín, with CIF 2536XXXXX, and with
                                    its office at Avenida XXXXXXXX, 50015, Zaragoza. For any questions about these terms and
                                    conditions, you can contact us via email at <a
                                        href="mailto:info@kandog.es">info@kandog.es</a> or by phone at 666-XXXXX.
                                </p>
    
                                <h2 class="fw-bold">Services Offered</h2>
                                <p>
                                    Kandog provides a platform for managing resources related to the care and education of
                                    dogs. Details about the various subscription plans can be found on the website. Trainers
                                    can choose between monthly and annual subscriptions.
                                </p>
    
                                <h2 class="fw-bold">Pricing and Payment Methods</h2>
                                <p>
                                    The prices for our services and products are listed on the website. We reserve the right
                                    to change prices at any time, but changes will not affect existing contracts. For
                                    monthly subscriptions, any changes in rates will apply in the following billing cycle
                                    after notification of the change. We accept credit/debit cards and bank transfers to
                                    account number XXXX-XXXX-XXXXX-XXXXX as payment methods.
                                </p>
    
                                <h2 class="fw-bold">Payment and Renewal</h2>
                                <p>
                                    Subscriptions to the Kandog platform are automatically renewed at the end of each
                                    period, whether monthly or annual, unless canceled in advance. Payments are processed on
                                    the 3rd of each month for monthly subscriptions and on the start date of the plan for
                                    annual subscriptions. Subscription renewal is automatic.
                                </p>
    
                                <h2 class="fw-bold">Cancellation and Refund Policy</h2>
                                <p>
                                    Users can cancel their subscription by following the instructions detailed on the
                                    website. To avoid the automatic renewal of a monthly subscription, it must be canceled
                                    before the 25th of the previous month. Annual subscriptions must be canceled at least 15
                                    days before the end of the annual period to avoid automatic renewal. You can cancel your
                                    subscription through the website or by contacting Kandog via <a
                                        href="mailto:info@kandog.es">info@kandog.es</a>. A refund will be issued for new
                                    users if, after 21 days, they find that the product does not meet their needs and they
                                    do not wish to continue using the platform.
                                </p>
    
                                <h2 class="fw-bold">User Responsibilities</h2>
                                <p>
                                    The user agrees to provide accurate and truthful information during the contracting
                                    process and to follow the rules for using the website. Misuse or illegal use of the
                                    website may lead to the termination of the contractual relationship without prior
                                    notice.
                                </p>
    
                                <h2 class="fw-bold">Limitation of Liability</h2>
                                <p>
                                    Kandog will not be liable for damages resulting from the use of the website or from
                                    contracting services, except in cases of gross negligence or willful misconduct. Kandog
                                    is also not responsible for technical errors, data loss, or service interruptions.
                                </p>
    
                                <h2 class="fw-bold">Applicable Law and Jurisdiction</h2>
                                <p>
                                    These terms and conditions will be governed by the laws of Spain. Any dispute related to
                                    these terms or the use of the website will be resolved in the courts of Zaragoza.
                                </p>
    
                                <h2 class="fw-bold">Changes to the Terms and Conditions</h2>
                                <p>
                                    Kandog reserves the right to modify these terms and conditions at any time. Any change
                                    will be communicated through the website. By continuing to use our services, you agree
                                    to the changes made.
                                </p>
    
                                <h2 class="fw-bold">Contact</h2>
                                <p>
                                    For any questions about these terms and conditions or to resolve issues related to our
                                    services, you can contact us via <a href="mailto:info@kandog.es">info@kandog.es</a> or
                                    by phone at 666-XXXXX.
                                </p>
                            @endif
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary"
                                data-bs-dismiss="modal">{{ __('OK') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>