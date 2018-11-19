/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package dao;

import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import modelo.FilmeVO;
import persistencia.ConexaoBanco;

/**
 *
 * @author Eloisa / Filipe Alves
 * @since 08/04/ 2017 - 12:53
 * @version 1.0
 */
public class FilmeDAO {
    public void cadastrarFilme(FilmeVO fVO) throws SQLException {

        Connection con = ConexaoBanco.getConexao();
        Statement stat = con.createStatement();

        try {
           String sql;
            sql = "insert into filme(idfilme,nomefilme,diretorfilme,anofilme,generofilme,positivofilme,negativofilme,mediafilme)"
                  + "values(null, '" + fVO.getNomefilme()+ "', '" + fVO.getDiretorfilme()+ "', " + fVO.getAnofilme()+ ", '"
                  +fVO.getGenerofilme()+"', '"+fVO.getPositivofilme()+"', '"+fVO.getNegativofilme()+"', '"+fVO.getMediafilme()+"')";

           stat.execute(sql);

        } catch (SQLException e) {
            throw new SQLException("Erro ao inserir filme!");
        } finally {
            con.close();
            stat.close();
        }//fecha finally
    }//fecha método

    public ArrayList<FilmeVO> buscarFilme() throws SQLException {

        Connection con = ConexaoBanco.getConexao();
        Statement stat = con.createStatement();

        try {
            String sql;

           sql = "select * from filme";

           ResultSet film = stat.executeQuery(sql);

           ArrayList<FilmeVO> filme = new ArrayList<>();

           while (film.next()) {
                FilmeVO f = new FilmeVO();

                f.setIdFilme(film.getLong("idfilme"));
                f.setNomefilme(film.getString("nomefilme"));
                f.setDiretorfilme(film.getString("diretorfilme"));
                f.setAnofilme(film.getInt("anofilme"));
                f.setGenerofilme(film.getString("generofilme"));
                f.setPositivofilme(film.getString("positivofilme"));
                f.setNegativofilme(film.getString("negativofilme"));
                f.setMediafilme(film.getString("mediafilme"));
                
                filme.add(f);
            }//fecha while

            return filme;

        } catch (SQLException e) {
            throw new SQLException("Erro ao buscar filmes! " + e.getMessage());
        } finally {
            con.close();
            stat.close();
        }//fecha finally
    }//fecha método buscarProduto

    public void deletarFilme(long idFilme) throws SQLException {

        Connection con = ConexaoBanco.getConexao();
        Statement stat = con.createStatement();

        try {
            String sql;
            sql = "delete from filme where idfilme=" + idFilme;

            stat.execute(sql);
        } catch (SQLException se) {
            throw new SQLException("Erro ao deletar filme! " + se.getMessage());
        } finally {
            stat.close();
            con.close();
        }//fecha finally
    }//fecha método deletarProduto    

    public ArrayList<FilmeVO> filtrar(String query) throws SQLException {
        Connection con = ConexaoBanco.getConexao();
        Statement stat = con.createStatement();
        try {
            String sql;
            sql = "select * from filme " +query;

            ResultSet rs = stat.executeQuery(sql);
            ArrayList<FilmeVO> filmi = new ArrayList<>();

            while (rs.next()) {
                FilmeVO fVO = new FilmeVO();
                fVO.setIdFilme(rs.getLong("idFilme"));
                fVO.setNomefilme(rs.getString("nomefilme"));
                fVO.setDiretorfilme(rs.getString("diretorfilme"));
                fVO.setAnofilme(rs.getInt("anofilme"));
                fVO.setGenerofilme(rs.getString("generofilme"));
                fVO.setPositivofilme(rs.getString("positivofilme"));
                fVO.setNegativofilme(rs.getString("negativofilme"));
                fVO.setMediafilme(rs.getString("mediafilme"));
                filmi.add(fVO);
            }//Fecha while
            return filmi;
        } catch (SQLException e) {
            throw new SQLException("Erro ao buscar dados do Banco! " + e.getMessage());
        } finally {
           con.close();
           stat.close();
        }//fecha finally
    }//fecha método filtrar    
    
    public void alterarFilme (FilmeVO fvo) throws SQLException{
        Connection con = ConexaoBanco.getConexao();
        Statement stat = con.createStatement();
        
        try {
            String sql;
            sql = "update filme set "
               +"nomefilme='" + fvo.getNomefilme() +"',"
               +"diretorfilme=" +fvo.getDiretorfilme() +","
               +"anofilme=" +fvo.getAnofilme()+","
               +"generofilme=" +fvo.getGenerofilme() +","
               +"positivofilme=" +fvo.getPositivofilme() +","
               +"negativofilme=" +fvo.getNegativofilme()+","
               +"mediafilme=" +fvo.getDiretorfilme() +" "
               +"where idfilme" +fvo.getIdFilme()+ "";
            
            stat.executeUpdate(sql);
            
            
        } catch (SQLException se) {
            throw new SQLException("Erro ao alterar filmeS! "+se.getMessage());
            
        }finally{
           con.close();
           stat.close();
        }//fecha finally
        
    }//fecha método
    
    
}//fecha classe
    

