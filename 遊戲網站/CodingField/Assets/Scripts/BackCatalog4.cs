using UnityEngine;
using System.Collections;

public class BackCatalog4 : MonoBehaviour {

    public GameObject BackCatalog4Object;
    // Use this for initialization
    void Start()
    {

    }

    // Update is called once per frame
    void Update()
    {

    }

    public void appear()
    {
        BackCatalog4Object.SetActive(true);
    }

    public void disappear()
    {
        BackCatalog4Object.SetActive(false);
    }
}