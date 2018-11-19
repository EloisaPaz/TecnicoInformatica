/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package dao;

/**
 *
 * @author Eloisa / Filipe Alves
 * @since 08/04/ 2017 - 12:53
 * @version 1.0
 */
public class DAOFactory {
    
    private static SerieDAO serieDAO = new SerieDAO();
    
    public static SerieDAO getSerieDAO(){
        return serieDAO;
      }//fecha método
    
    private static FilmeDAO filmeDAO = new FilmeDAO();
    
    public static FilmeDAO getFilmeDAO(){
        return filmeDAO;
      }//fecha método
    
}
