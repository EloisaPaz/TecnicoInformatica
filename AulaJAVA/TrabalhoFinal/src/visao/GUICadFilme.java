/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package visao;

import java.awt.event.KeyEvent;
import javax.swing.JOptionPane;
import modelo.FilmeVO;
import servicos.FilmeServicos;
import servicos.ServicosFactory;

/**
 *
 * @author Eloisa / Filipe Alves
 * @since 08/04/ 2017 - 12:53
 * @version 1.0
 */
public class GUICadFilme extends javax.swing.JInternalFrame {

    /**
     * Creates new form GUICadFilme
     */
    public GUICadFilme() {
        initComponents();
    }

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    
    private void cadastrar() {

        try {
            FilmeVO fVO = new FilmeVO();
            fVO.setNomefilme(jtNomeFilme.getText());
            fVO.setDiretorfilme(jtDiretorFilme.getText());
            fVO.setAnofilme(Integer.parseInt(jtAnoFilme.getText()));
            fVO.setGenerofilme(jcomboGeneroFilme.getToolTipText());
            fVO.setPositivofilme(jtaPontosPositivosFilme.getText());
            fVO.setNegativofilme(jtaPontosNegativosFilme.getText());
            fVO.setMediafilme(bgMediaFinalFilme.getSelection().getActionCommand());
            
            FilmeServicos fs = ServicosFactory.getFilmeServicos();
            fs.cadastrarFilme(fVO);
           
            JOptionPane.showMessageDialog(rootPane,
                    "Filme Cadastrado com sucesso! ");

        } catch (Exception e) {
            JOptionPane.showMessageDialog(rootPane,
                    "Erro! " + e.getMessage(),
                    "Erro! ",
                    JOptionPane.ERROR_MESSAGE);

        }//fecha catch

    }//fecha cadastrar
    
    private void limpar(){
        jtNomeFilme.setText(null);
        jtDiretorFilme.setText(null);
        jtAnoFilme.setText(null);
        jcomboGeneroFilme.setSelectedIndex(0);
        jtaPontosPositivosFilme.setText(null);
        jtaPontosNegativosFilme.setText(null);
        bgMediaFinalFilme.clearSelection();
    }//fecha limpar 
    
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jRadioButton1 = new javax.swing.JRadioButton();
        bgMediaFinalFilme = new javax.swing.ButtonGroup();
        jTextField1 = new javax.swing.JTextField();
        jLayeredPane1 = new javax.swing.JLayeredPane();
        jlNomeFilme = new javax.swing.JLabel();
        jtNomeFilme = new javax.swing.JTextField();
        jlDiretorFilme = new javax.swing.JLabel();
        jtDiretorFilme = new javax.swing.JTextField();
        jlAnoFilme = new javax.swing.JLabel();
        jtAnoFilme = new javax.swing.JTextField();
        jlGeneroFilme = new javax.swing.JLabel();
        jcomboGeneroFilme = new javax.swing.JComboBox<>();
        jLayeredPane2 = new javax.swing.JLayeredPane();
        jlPontosPositivosFilme = new javax.swing.JLabel();
        jScrollPane1 = new javax.swing.JScrollPane();
        jtaPontosPositivosFilme = new javax.swing.JTextArea();
        jLayeredPane3 = new javax.swing.JLayeredPane();
        jlPontosNegativosFilme = new javax.swing.JLabel();
        jScrollPane2 = new javax.swing.JScrollPane();
        jtaPontosNegativosFilme = new javax.swing.JTextArea();
        jLayeredPane4 = new javax.swing.JLayeredPane();
        jlMediaFinalFilme = new javax.swing.JLabel();
        jrbfBom = new javax.swing.JRadioButton();
        jrbfRegular = new javax.swing.JRadioButton();
        jrbfRuim = new javax.swing.JRadioButton();
        jrbfOtimo = new javax.swing.JRadioButton();
        jLayeredPane5 = new javax.swing.JLayeredPane();
        jbCadastrarFilme = new javax.swing.JButton();
        jbLimparFilme = new javax.swing.JButton();

        jRadioButton1.setText("jRadioButton1");

        jTextField1.setText("jTextField1");

        setClosable(true);
        setIconifiable(true);
        setMaximizable(true);

        jLayeredPane1.setBackground(new java.awt.Color(0, 153, 153));
        jLayeredPane1.setBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(0, 0, 0)));
        jLayeredPane1.setForeground(new java.awt.Color(0, 153, 153));

        jlNomeFilme.setText("Nome do filme:");

        jlDiretorFilme.setText("Diretor:");

        jlAnoFilme.setText("Ano:");

        jlGeneroFilme.setText("Genero:");

        jcomboGeneroFilme.setModel(new javax.swing.DefaultComboBoxModel<>(new String[] { "Terror", "Comédia", "Suspense", "Romance", "Drama", "Animação" }));

        jLayeredPane1.setLayer(jlNomeFilme, javax.swing.JLayeredPane.DEFAULT_LAYER);
        jLayeredPane1.setLayer(jtNomeFilme, javax.swing.JLayeredPane.DEFAULT_LAYER);
        jLayeredPane1.setLayer(jlDiretorFilme, javax.swing.JLayeredPane.DEFAULT_LAYER);
        jLayeredPane1.setLayer(jtDiretorFilme, javax.swing.JLayeredPane.DEFAULT_LAYER);
        jLayeredPane1.setLayer(jlAnoFilme, javax.swing.JLayeredPane.DEFAULT_LAYER);
        jLayeredPane1.setLayer(jtAnoFilme, javax.swing.JLayeredPane.DEFAULT_LAYER);
        jLayeredPane1.setLayer(jlGeneroFilme, javax.swing.JLayeredPane.DEFAULT_LAYER);
        jLayeredPane1.setLayer(jcomboGeneroFilme, javax.swing.JLayeredPane.DEFAULT_LAYER);

        javax.swing.GroupLayout jLayeredPane1Layout = new javax.swing.GroupLayout(jLayeredPane1);
        jLayeredPane1.setLayout(jLayeredPane1Layout);
        jLayeredPane1Layout.setHorizontalGroup(
            jLayeredPane1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jLayeredPane1Layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(jLayeredPane1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(jLayeredPane1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                        .addGroup(jLayeredPane1Layout.createSequentialGroup()
                            .addComponent(jlNomeFilme)
                            .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                            .addComponent(jtNomeFilme, javax.swing.GroupLayout.PREFERRED_SIZE, 268, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addGroup(jLayeredPane1Layout.createSequentialGroup()
                            .addComponent(jlDiretorFilme)
                            .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                            .addComponent(jtDiretorFilme)
                            .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                            .addComponent(jlAnoFilme)
                            .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                            .addComponent(jtAnoFilme, javax.swing.GroupLayout.PREFERRED_SIZE, 66, javax.swing.GroupLayout.PREFERRED_SIZE)))
                    .addGroup(jLayeredPane1Layout.createSequentialGroup()
                        .addComponent(jlGeneroFilme)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(jcomboGeneroFilme, javax.swing.GroupLayout.PREFERRED_SIZE, 135, javax.swing.GroupLayout.PREFERRED_SIZE)))
                .addContainerGap(23, Short.MAX_VALUE))
        );
        jLayeredPane1Layout.setVerticalGroup(
            jLayeredPane1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jLayeredPane1Layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(jLayeredPane1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jlNomeFilme)
                    .addComponent(jtNomeFilme, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(jLayeredPane1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jlDiretorFilme)
                    .addComponent(jtDiretorFilme, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jlAnoFilme)
                    .addComponent(jtAnoFilme, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(jLayeredPane1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(jlGeneroFilme)
                    .addComponent(jcomboGeneroFilme, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
        );

        jLayeredPane2.setBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(0, 0, 0)));

        jlPontosPositivosFilme.setText("Pontos positivos:");

        jtaPontosPositivosFilme.setColumns(20);
        jtaPontosPositivosFilme.setRows(5);
        jScrollPane1.setViewportView(jtaPontosPositivosFilme);

        jLayeredPane2.setLayer(jlPontosPositivosFilme, javax.swing.JLayeredPane.DEFAULT_LAYER);
        jLayeredPane2.setLayer(jScrollPane1, javax.swing.JLayeredPane.DEFAULT_LAYER);

        javax.swing.GroupLayout jLayeredPane2Layout = new javax.swing.GroupLayout(jLayeredPane2);
        jLayeredPane2.setLayout(jLayeredPane2Layout);
        jLayeredPane2Layout.setHorizontalGroup(
            jLayeredPane2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jLayeredPane2Layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jlPontosPositivosFilme)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jScrollPane1)
                .addGap(16, 16, 16))
        );
        jLayeredPane2Layout.setVerticalGroup(
            jLayeredPane2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jLayeredPane2Layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(jLayeredPane2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(jScrollPane1, javax.swing.GroupLayout.PREFERRED_SIZE, 0, Short.MAX_VALUE)
                    .addGroup(jLayeredPane2Layout.createSequentialGroup()
                        .addComponent(jlPontosPositivosFilme)
                        .addGap(0, 71, Short.MAX_VALUE)))
                .addContainerGap())
        );

        jLayeredPane3.setBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(0, 0, 0)));

        jlPontosNegativosFilme.setText("Pontos negativos:");

        jtaPontosNegativosFilme.setColumns(20);
        jtaPontosNegativosFilme.setRows(5);
        jScrollPane2.setViewportView(jtaPontosNegativosFilme);

        jLayeredPane3.setLayer(jlPontosNegativosFilme, javax.swing.JLayeredPane.DEFAULT_LAYER);
        jLayeredPane3.setLayer(jScrollPane2, javax.swing.JLayeredPane.DEFAULT_LAYER);

        javax.swing.GroupLayout jLayeredPane3Layout = new javax.swing.GroupLayout(jLayeredPane3);
        jLayeredPane3.setLayout(jLayeredPane3Layout);
        jLayeredPane3Layout.setHorizontalGroup(
            jLayeredPane3Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jLayeredPane3Layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jlPontosNegativosFilme)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jScrollPane2)
                .addContainerGap())
        );
        jLayeredPane3Layout.setVerticalGroup(
            jLayeredPane3Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jLayeredPane3Layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(jLayeredPane3Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(jScrollPane2, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jlPontosNegativosFilme))
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
        );

        jLayeredPane4.setBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(0, 0, 0)));

        jlMediaFinalFilme.setText("Média final:");

        bgMediaFinalFilme.add(jrbfBom);
        jrbfBom.setText("Bom");

        bgMediaFinalFilme.add(jrbfRegular);
        jrbfRegular.setText("Regular");

        bgMediaFinalFilme.add(jrbfRuim);
        jrbfRuim.setText("Ruim");

        bgMediaFinalFilme.add(jrbfOtimo);
        jrbfOtimo.setText("Ótimo");

        jLayeredPane4.setLayer(jlMediaFinalFilme, javax.swing.JLayeredPane.DEFAULT_LAYER);
        jLayeredPane4.setLayer(jrbfBom, javax.swing.JLayeredPane.DEFAULT_LAYER);
        jLayeredPane4.setLayer(jrbfRegular, javax.swing.JLayeredPane.DEFAULT_LAYER);
        jLayeredPane4.setLayer(jrbfRuim, javax.swing.JLayeredPane.DEFAULT_LAYER);
        jLayeredPane4.setLayer(jrbfOtimo, javax.swing.JLayeredPane.DEFAULT_LAYER);

        javax.swing.GroupLayout jLayeredPane4Layout = new javax.swing.GroupLayout(jLayeredPane4);
        jLayeredPane4.setLayout(jLayeredPane4Layout);
        jLayeredPane4Layout.setHorizontalGroup(
            jLayeredPane4Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jLayeredPane4Layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jlMediaFinalFilme)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(jrbfOtimo)
                .addGap(18, 18, 18)
                .addComponent(jrbfBom)
                .addGap(27, 27, 27)
                .addComponent(jrbfRegular)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addComponent(jrbfRuim)
                .addGap(19, 19, 19))
        );
        jLayeredPane4Layout.setVerticalGroup(
            jLayeredPane4Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jLayeredPane4Layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(jLayeredPane4Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jlMediaFinalFilme)
                    .addComponent(jrbfBom)
                    .addComponent(jrbfRegular)
                    .addComponent(jrbfRuim)
                    .addComponent(jrbfOtimo))
                .addContainerGap(18, Short.MAX_VALUE))
        );

        jLayeredPane5.setBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(0, 0, 0)));

        jbCadastrarFilme.setFont(new java.awt.Font("Tahoma", 0, 12)); // NOI18N
        jbCadastrarFilme.setText("Cadastrar");
        jbCadastrarFilme.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jbCadastrarFilmeActionPerformed(evt);
            }
        });
        jbCadastrarFilme.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                jbCadastrarFilmeKeyPressed(evt);
            }
        });

        jbLimparFilme.setBackground(new java.awt.Color(204, 204, 204));
        jbLimparFilme.setFont(new java.awt.Font("Tahoma", 0, 12)); // NOI18N
        jbLimparFilme.setText("Limpar");
        jbLimparFilme.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jbLimparFilmeActionPerformed(evt);
            }
        });
        jbLimparFilme.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                jbLimparFilmeKeyPressed(evt);
            }
        });

        jLayeredPane5.setLayer(jbCadastrarFilme, javax.swing.JLayeredPane.DEFAULT_LAYER);
        jLayeredPane5.setLayer(jbLimparFilme, javax.swing.JLayeredPane.DEFAULT_LAYER);

        javax.swing.GroupLayout jLayeredPane5Layout = new javax.swing.GroupLayout(jLayeredPane5);
        jLayeredPane5.setLayout(jLayeredPane5Layout);
        jLayeredPane5Layout.setHorizontalGroup(
            jLayeredPane5Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jLayeredPane5Layout.createSequentialGroup()
                .addGap(31, 31, 31)
                .addComponent(jbCadastrarFilme, javax.swing.GroupLayout.PREFERRED_SIZE, 129, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addComponent(jbLimparFilme, javax.swing.GroupLayout.PREFERRED_SIZE, 138, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(35, 35, 35))
        );
        jLayeredPane5Layout.setVerticalGroup(
            jLayeredPane5Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jLayeredPane5Layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(jLayeredPane5Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                    .addComponent(jbCadastrarFilme, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addComponent(jbLimparFilme, javax.swing.GroupLayout.DEFAULT_SIZE, 32, Short.MAX_VALUE))
                .addContainerGap(20, Short.MAX_VALUE))
        );

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(jLayeredPane1)
                    .addComponent(jLayeredPane2)
                    .addComponent(jLayeredPane3)
                    .addComponent(jLayeredPane4)
                    .addComponent(jLayeredPane5))
                .addContainerGap())
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jLayeredPane1, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jLayeredPane2, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jLayeredPane3)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(jLayeredPane4, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(jLayeredPane5, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void jbCadastrarFilmeActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jbCadastrarFilmeActionPerformed
        // TODO add your handling code here:
        cadastrar();
        limpar();
    }//GEN-LAST:event_jbCadastrarFilmeActionPerformed

    private void jbCadastrarFilmeKeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_jbCadastrarFilmeKeyPressed
        // TODO add your handling code here:
        if(evt.getKeyCode()==KeyEvent.VK_ENTER){
            cadastrar();
            limpar();
        }
    }//GEN-LAST:event_jbCadastrarFilmeKeyPressed

    private void jbLimparFilmeActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jbLimparFilmeActionPerformed
        // TODO add your handling code here:
        limpar();
    }//GEN-LAST:event_jbLimparFilmeActionPerformed

    private void jbLimparFilmeKeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_jbLimparFilmeKeyPressed
        // TODO add your handling code here:
        if(evt.getKeyCode()==KeyEvent.VK_ENTER){
            limpar();
        }
    }//GEN-LAST:event_jbLimparFilmeKeyPressed


    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.ButtonGroup bgMediaFinalFilme;
    private javax.swing.JLayeredPane jLayeredPane1;
    private javax.swing.JLayeredPane jLayeredPane2;
    private javax.swing.JLayeredPane jLayeredPane3;
    private javax.swing.JLayeredPane jLayeredPane4;
    private javax.swing.JLayeredPane jLayeredPane5;
    private javax.swing.JRadioButton jRadioButton1;
    private javax.swing.JScrollPane jScrollPane1;
    private javax.swing.JScrollPane jScrollPane2;
    private javax.swing.JTextField jTextField1;
    private javax.swing.JButton jbCadastrarFilme;
    private javax.swing.JButton jbLimparFilme;
    private javax.swing.JComboBox<String> jcomboGeneroFilme;
    private javax.swing.JLabel jlAnoFilme;
    private javax.swing.JLabel jlDiretorFilme;
    private javax.swing.JLabel jlGeneroFilme;
    private javax.swing.JLabel jlMediaFinalFilme;
    private javax.swing.JLabel jlNomeFilme;
    private javax.swing.JLabel jlPontosNegativosFilme;
    private javax.swing.JLabel jlPontosPositivosFilme;
    private javax.swing.JRadioButton jrbfBom;
    private javax.swing.JRadioButton jrbfOtimo;
    private javax.swing.JRadioButton jrbfRegular;
    private javax.swing.JRadioButton jrbfRuim;
    private javax.swing.JTextField jtAnoFilme;
    private javax.swing.JTextField jtDiretorFilme;
    private javax.swing.JTextField jtNomeFilme;
    private javax.swing.JTextArea jtaPontosNegativosFilme;
    private javax.swing.JTextArea jtaPontosPositivosFilme;
    // End of variables declaration//GEN-END:variables
}