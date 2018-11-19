/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package servicos;

import dao.DAOFactory;
import dao.SerieDAO;
import java.sql.SQLException;
import java.util.ArrayList;
import modelo.SerieVO;

/**
 *
 * @author Eloisa / Filipe Alves
 * @since 08/04/ 2017 - 12:53
 * @version 1.0
 */
public class SerieServicos {
   
    public void cadastrarSerie (SerieVO s) throws SQLException{
        SerieDAO sDAO = DAOFactory.getSerieDAO();
        sDAO.cadastrarSerie(s);
    }//fecha CADASTRAR
    
    public ArrayList<SerieVO> buscarSerie() throws SQLException {
    SerieDAO sDAO = DAOFactory.getSerieDAO();
    return sDAO.buscarSerie();
    }//fecha buscar serie
    
    public void deletarSerie(long idSerie) throws SQLException{
        SerieDAO sDAO = DAOFactory.getSerieDAO();
        sDAO.deletarSerie(idSerie);
    }//fecha método deletarFilme
    
    public ArrayList<SerieVO> filtrar(String query) throws SQLException{
        SerieDAO sDAO = DAOFactory.getSerieDAO();
        return sDAO.filtrar(query);
    }//fecha método filtrar   
    
    public void alterarSerie(SerieVO svo) throws SQLException{
        SerieDAO sdao = DAOFactory.getSerieDAO();
        sdao.alterarSerie(svo);
    }//fecha método alterar

 
    
}//fecha CLASSE

