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
import javax.swing.JOptionPane;
import modelo.SerieVO;
import persistencia.ConexaoBanco;

/**
 *
 * @author Eloisa / Filipe Alves
 * @since 08/04/ 2017 - 12:53
 * @version 1.0
 */
public class SerieDAO {
    public void cadastrarSerie(SerieVO sVO) throws SQLException {

        Connection con = ConexaoBanco.getConexao();
        Statement stat = con.createStatement();

        try {
           String sql;          
           
            sql = "insert into serie(idserie,nomeserie,diretorserie,anoserie,generoserie,positivoserie,negativoserie,mediaserie)"
                  + "values(null, '" + sVO.getNomeserie()+ "', '" + sVO.getDiretorserie()+ "', " + sVO.getAnoserie()+ ", '"
                  +sVO.getGeneroserie()+"', '"+sVO.getPositivoserie()+"', '"+sVO.getNegativoserie()+"', '"+sVO.getMediaserie()+"')";
           
           stat.execute(sql);

        } catch (SQLException e) {
            throw new SQLException(e.getMessage());
        } finally {
            con.close();
            stat.close();
        }//fecha finally
    }//fecha método

    public ArrayList<SerieVO> buscarSerie() throws SQLException {

        Connection con = ConexaoBanco.getConexao();
        Statement stat = con.createStatement();

        try {
            String sql;

           sql = "select * from serie";

           ResultSet seri = stat.executeQuery(sql);

           ArrayList<SerieVO> serie = new ArrayList<>();

           while (seri.next()) {
                SerieVO s = new SerieVO();

                s.setIdSerie(seri.getLong("idserie"));
                s.setNomeserie(seri.getString("nomeserie"));
                s.setDiretorserie(seri.getString("diretorserie"));
                s.setAnoserie(seri.getInt("anoserie"));
                s.setGeneroserie(seri.getString("generoserie"));
                s.setPositivoserie(seri.getString("positivoserie"));
                s.setNegativoserie(seri.getString("negativoserie"));
                s.setMediaserie(seri.getString("mediaserie"));
                serie.add(s);
            }//fecha while

            return serie;

        } catch (SQLException e) {
            throw new SQLException("Erro ao buscar série! " + e.getMessage());
        } finally {
            con.close();
            stat.close();
        }//fecha finally
    }//fecha método buscarSerie

    public void deletarSerie(long idSerie) throws SQLException {

        Connection con = ConexaoBanco.getConexao();
        Statement stat = con.createStatement();

        try {
            String sql;
            sql = "delete from serie where idserie=" + idSerie;

            stat.execute(sql);
        } catch (SQLException se) {
            throw new SQLException("Erro ao deletar série! " + se.getMessage());
        } finally {
            stat.close();
            con.close();
        }//fecha finally
    }//fecha método deletarSerie  
    
    public ArrayList<SerieVO> filtrar(String query) throws SQLException {
        Connection con = ConexaoBanco.getConexao();
        Statement stat = con.createStatement();
        try {
            String sql;
            sql = "select * from serie " + query;
            

            ResultSet rs = stat.executeQuery(sql);
            ArrayList<SerieVO> seri = new ArrayList<>();

            while (rs.next()) {
                SerieVO sVO = new SerieVO();
                sVO.setIdSerie(rs.getLong("idSerie"));
                sVO.setNomeserie(rs.getString("nomeserie"));
                sVO.setDiretorserie(rs.getString("diretorserie"));
                sVO.setAnoserie(rs.getInt("anoserie"));
                sVO.setGeneroserie(rs.getString("generoserie"));
                sVO.setPositivoserie(rs.getString("positivoserie"));
                sVO.setNegativoserie(rs.getString("negativoserie"));
                sVO.setMediaserie(rs.getString("mediaserie"));
                seri.add(sVO);
            }//Fecha while
            return seri;
        } catch (SQLException se) {
            throw new SQLException("Erro ao buscar dados do Banco! " + se.getMessage());
        } finally {
            stat.close();
            con.close();
        }//fecha finally
    }//fecha método filtrar 
    
        public void alterarSerie (SerieVO svo) throws SQLException{
        Connection con = ConexaoBanco.getConexao();
        Statement stat = con.createStatement();
        
        try {
            String sql;
            sql = "update serie set "
               +"nomeserie='" + svo.getNomeserie()+"',"
               +"diretorserie='" +svo.getDiretorserie()+"',"
               +"anoserie='" +svo.getAnoserie()+"',"
               +"generoserie='" +svo.getGeneroserie()+"',"
               +"positivoserie='" +svo.getPositivoserie()+"',"
               +"negativoserie='" +svo.getNegativoserie()+"',"
               +"mediaserie='" +svo.getDiretorserie()+"' "
               +"where idserie='" +svo.getIdSerie()+ "'";
            JOptionPane.showMessageDialog(null, sql);
            stat.executeUpdate(sql);
            
            
        } catch (SQLException se) {
            throw new SQLException("Erro ao alterar serie! "+se.getMessage());
            
        }finally{
           con.close();
           stat.close();
        }//fecha finally
        
    }//fecha método

}
