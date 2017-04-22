/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package servicioclientefecha;

/**
 *
 * @author LENOVO
 */
public class ServicioClienteFecha {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        System.out.println("ServicioClienteFecha");
        System.out.println(getFecha("Da"));
    }

    private static String getFecha(java.lang.String nombre) {
        servicioclientefecha.ServicioWebFechaService service = new servicioclientefecha.ServicioWebFechaService();
        servicioclientefecha.ServicioWebFecha port = service.getServicioWebFechaPort();
        return port.getFecha(nombre);
    }
    
}
