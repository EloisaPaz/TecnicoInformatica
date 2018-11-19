/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package servicos;

import dao.DAOFactory;
import dao.FilmeDAO;
import java.sql.SQLException;
import java.util.ArrayList;
import modelo.FilmeVO;

/**
 *
 * @author Eloisa / Filipe Alves
 * @since 08/04/ 2017 - 12:53
 * @version 1.0
 */
public class FilmeServicos {
    public void cadastrarFilme (FilmeVO f) throws SQLException{
        FilmeDAO fDAO = DAOFactory.getFilmeDAO();
        fDAO.cadastrarFilme(f);
    }

 
    public ArrayList<FilmeVO> buscarFilme() throws SQLException {
        FilmeDAO fdao = DAOFactory.getFilmeDAO();
        return fdao.buscarFilme();
    }//fecha buscar filmes
    

    public void deletarFilme(long idFilme) throws SQLException{
        FilmeDAO fDAO = DAOFactory.getFilmeDAO();
        fDAO.deletarFilme(idFilme);
    }//fecha método deletarFilme
    
    public ArrayList<FilmeVO> filtrar(String query) throws SQLException{
        FilmeDAO fDAO = DAOFactory.getFilmeDAO();
        return fDAO.filtrar(query);
    }//fecha método filtrar   
    
    public void alterarFilme(FilmeVO fvo) throws SQLException{
        FilmeDAO fdao = DAOFactory.getFilmeDAO();
        fdao.alterarFilme(fvo);
    }//fecha método alterar



}//fecha classe


