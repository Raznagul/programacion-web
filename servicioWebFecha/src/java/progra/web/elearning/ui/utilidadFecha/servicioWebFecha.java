/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package progra.web.elearning.ui.utilidadFecha;

import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.Date;
import java.util.GregorianCalendar;
import javax.jws.WebService;
import javax.jws.WebMethod;
import javax.jws.WebParam;

/**
 *
 * @author LENOVO
 */
@WebService
public class servicioWebFecha {

    /**
     * This is a sample web service operation
     */
    @WebMethod
    public String getFecha(@WebParam(name = "nombre") String name) {
        Calendar calendario = GregorianCalendar.getInstance();
        Date fecha = calendario.getTime();
        SimpleDateFormat formatoDeFecha = new SimpleDateFormat("dd/MM/yyyy");
        System.out.println(formatoDeFecha.format(fecha));
        return "Hola " + name + " ! Gracias por utilizar este servicio web. La fecha de hoy es: " + formatoDeFecha.format(fecha) + "!";
    }
}
